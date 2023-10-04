<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessNews;
use App\Mail\ContactFormMail;
use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class EmailIdController extends Controller
{
    public function homeId(){
        return view('welcome-id');
    }

    public function contact(Request $request)
{
    $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'mail' => 'required|string',
    ];

    $messages = [
        'name.required' => 'Nama harus diisi',
        'email.required' => 'Alamat email harus diisi',
        'email.email' => 'Alamat email harus valid',
        'subject.required' => 'Subjek harus diisi',
        'mail.required' => 'Pesan harus diisi',
    ];

    $validator = Validator::make($request->all(), $rules, $messages);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'errors' => $validator->errors(),
        ], 422); // 422 is the HTTP status code for unprocessable entity
    }

    $name = $request->input('name');
    $email = $request->input('email');
    $subject = $request->input('subject');
    $mail = $request->input('mail');

    Mail::to('webcreativs2@gmail.com')->send(new ContactFormMail($name, $email, $subject, $mail));

    return response()->json([
        'success' => true,
        'message' => 'Pesan anda sudah terkirim. Terima kasih!',
    ]);
}


    public function storeEmail(Request $request)
    {

        $Email = $request->input('Email');

        // $val = Validator::make($request->all(), [
        //     'Email' =>  'required|email|unique:emails,Email,except,id'
        // ]);

        // if ($val->fails()) {
        //     return response()->json(["code" => 400]);
        // }

        // $to = $request->Email;

        $exists = Email::where('Email', $Email)->exists();

        if ($exists){
            return response()->json([
                'status' => 'duplicate',
                'message' => 'Alamat email sudah berlangganan!'
            ]);
        }

        Mail::to($Email)->send(new SendEmail());

        Email::create([
            'Email' => $request->Email
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Terima kasih telah berlangganan!'
        ]);
    }
}
