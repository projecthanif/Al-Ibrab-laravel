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
        $formData = $contactSendRequest->validated();
        $mail = Mail::to($formData['email'])->send(new QuerySender($formData));
        // $mail = Mail::to(env('MAIL_FROM_ADDRESS'))->send(new QuerySender($formData));
        if ($mail) {
            return back()->with(['message' => 'Your message has been sent']);
        }
        return with(['message' => 'Issue occurred when sending mail, please resend']);
    }
}
