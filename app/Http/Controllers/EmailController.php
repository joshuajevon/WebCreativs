<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessNews;
use App\Mail\ContactFormMail;
use App\Mail\SendEmail;
use App\Models\Email;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function contact(Request $request){
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

        $request->validate($rules, $messages);

        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $mail = $request->input('mail');

        Mail::to('webcreativs2@gmail.com')->send(new ContactFormMail($name, $email, $subject, $mail));

        return redirect()->back()->with('success', 'Terima kasih telah menghubungi kami. Tim kami akan segera menghubungi anda');
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
