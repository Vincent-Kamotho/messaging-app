<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function sendSMS(Request $request)
    {
        $sid = getenv('TWILIO_SID');
        $token = getenv('TWILIO_AUTH_TOKEN');
        $twilioPhoneNumber = getenv('TWILIO_PHONE_NUMBER');

        $client = new Client($sid, $token);

        $message = $client->messages
                          ->create("+254 708 683439",
            
            [
                'body' => "This is the message I am Sending you",
                'from' => $twilioPhoneNumber,
            ]
        );

        return response()->json(['message' => 'SMS sent successfully']);
    }

    
}
