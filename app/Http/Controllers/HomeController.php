<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class HomeController extends Controller
{
    public function verifyMobile(Request $request)
    {
        /* Get credentials from .env */
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");

        return collect([
            'status' => 'success',
            'message' => 'OTP code sent successfully.',
            'opt_sent' => true
        ]);

        try {

            $twilio = new Client($twilio_sid, $token);

            $twilio->verify->v2->services($twilio_verify_sid)
                ->verifications
                ->create($request->post('mobile'), "sms");

            return collect([
                'status' => 'success',
                'message' => 'OTP code sent successfully.',
                'opt_sent' => true
            ]);
        } catch (\Exception $e) {

            return collect([
                'status' => 'error',
                'message' => 'Unable to sent OTP code, please make enter a valid number or try again later.'
            ]);
        }
    }

    public function verifyOTP(Request $request)
    {
        $mobile = $request->post('mobile');
        $otp = $request->post('otp');

        /* Get credentials from .env */
        $token = env("TWILIO_AUTH_TOKEN");
        $twilio_sid = env("TWILIO_SID");
        $twilio_verify_sid = env("TWILIO_VERIFY_SID");

        return collect([
            'status' => 'success',
            'message' => 'OTP code validted'
        ]);

        try {

            $twilio = new Client($twilio_sid, $token);

            $verification = $twilio->verify->v2->services($twilio_verify_sid)
                ->verificationChecks
                ->create($otp, array('to' => $mobile));

            if ($verification->valid) {

                return collect([
                    'status' => 'success',
                    'message' => 'OTP code validted'
                ]);
            } else {

                return collect([
                    'status' => 'error',
                    'message' => 'Invalid OTP code!'
                ]);
            }
        } catch (\Exception $e) {


            return collect([
                'status' => 'error',
                'message' => 'Invalid OTP code!'
            ]);
        }
    }
}
