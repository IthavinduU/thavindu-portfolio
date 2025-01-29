<?php

// ContactController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Mime\Part\TextPart;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $name = $request->input('Name');
        $company = $request->input('Company');
        $email = $request->input('E-mail');
        $phone = $request->input('Phone');
        $emailMessage = $request->input('Message');

        // Ensure 'Company' input is converted to a string
        $company = (string) $request->input('Company');

        Log::info('Company: ' . $company); // Log the company value to debug

        // Render the email body from the Blade view file
        $body = view('emails.contact', compact('name', 'company', 'email', 'phone', 'emailMessage'))->render();

        Mail::html($body, function ($message) use ($company, $email) {
            $message->to('lankeshhalangoda@gmail.com')
                ->subject($company)
                ->replyTo($email); // Set the sender's email address as the Reply-To address
        });

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
}

