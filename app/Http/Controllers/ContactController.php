<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSendRequest;
use App\Mail\QuerySender;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'nav' => 'contact'
        ]);
    }

    public function sendMail(ContactSendRequest $contactSendRequest)
    {
        // dd($contactSendRequest->all());
        $formData = $contactSendRequest->validated();
        $mail = Mail::to($formData['email'])->send(new QuerySender($formData));
        // $mail = Mail::to(env('MAIL_FROM_ADDRESS'))->send(new QuerySender($formData));
        if ($mail) {
            dd($mail);
            return back()->with(['message' => 'Your message has been sent']);
        }
        return back()->with(['message' => 'Issue occured when sending mail, please resend']);
    }
}
