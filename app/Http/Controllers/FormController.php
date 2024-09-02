<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client;
class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        
        $email = $request->input('email');
        $subject = $request->input('subject');
        $body = $request->input('message');

        Mail::send([], [],function($message) use($email, $subject, $body){
            $message->from($email)
            ->to('gitechgamestrichy2022@gmail.com')
            ->subject($subject)
            ->setBody($body, 'text/html');
            return back()->with('success', 'Thank you for contacting us! Your message has been sent.');
        });

         DB::table('contact_us')->insert($validatedData);

        return response()->json(['message' => 'Form submitted successfully','request_data'=>$request->input()],200);
    }

    public function getUserInfo(Request $request)
    {
        // Get client IP address
        $client_ip = $request->ip();

        // Get user agent
        $user_agent = $request->header('User-Agent');

        // Get the username of the device (assuming it's a Windows machine)
        exec("echo %USERNAME%", $username);

        // Format the data to be stored
        $data = "Username: " . $username[0] . "\nIP Address: " . $client_ip . "\nUser Agent: " . $user_agent . "\n";

        // Write the data to a text file named 'user_data.txt' in storage directory
        \Storage::disk('local')->append('user_data.txt', $data);



        // ............
        // Initialize Guzzle HTTP Client
        $client = new Client();

        // Make a GET request to IPinfo API with your API key
        $response = $client->get('https://ipinfo.io/' . $client_ip .'/json?token='.env('IP_TOKEN'));
       
        // Get the response body as JSON
        $body = $response->getBody()->getContents();

        // Decode the JSON response
        $data = json_decode($body);
        dd($data);
        // Extract relevant information
        $country = $data->country;
        $region = $data->region;
        $city = $data->city;
        $latitude = $data->loc ? explode(',', $data->loc)[0] : null;
        $longitude = $data->loc ? explode(',', $data->loc)[1] : null;

        // Now you have location details, you can use them as needed

        return view('userinfo', compact('country', 'region', 'city', 'latitude', 'longitude'));
  


        return "Data stored successfully.";
    }
}
