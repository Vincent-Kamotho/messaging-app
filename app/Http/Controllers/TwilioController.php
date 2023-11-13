<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class TwilioController extends Controller
{
    public function sendSMS(Request $request)
    {
        $sid               = env('TWILIO_SID');
        $token             = env('TWILIO_AUTH_TOKEN');
        $twilioPhoneNumber = env('TWILIO_PHONE_NUMBER');

        $client = new Client($sid, $token);

        $message = $client->messages->create(
            $request->input('to'),
            [
                'from' => $twilioPhoneNumber,
                'body' => $request->input('message'),
            ]
        );

        return response()->json(['message' => 'SMS sent successfully']);
    }

    
}
