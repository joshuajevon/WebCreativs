<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessNews;
use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function storeEmail(Request $request)
    {

        $val = Validator::make($request->all(), [
            'Email' =>  'required|email|unique:emails,Email,except,id'
        ]);

        if ($val->fails()) {
            return response()->json(["code" => 400]);
        }

        $to = $request->Email;

        Mail::to($to)->send(new SendEmail());

        Email::create([
            'Email' => $request->Email
        ]);

        return response()->json(["code" => 200]);
    }

    public function sendEmail(Request $request)
    {
        if ($request->password != "ayam") {
            return response()->json(400);
        }

        $emails = Email::pluck('Email');

        foreach ($emails as $email) {
            ProcessNews::dispatch($email);
        }

        Artisan::call('queue:work');

        return response()->json(200);
    }
}
