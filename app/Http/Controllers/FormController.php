<?php

namespace App\Http\Controllers;

use App\Block;
use App\BookJet;
use App\Contact;
use App\Destination;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\SubscribeRequest;
use App\Menu;
use App\MenuLinks;
use App\Slider;
use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{

    public function requestQuotes(Request $request)
    {
        $data = $request->only('from', 'to', 'when', 'time', 'passangers_count','adults', 'childrens');

        $created = BookJet::create($data);

        if (!$created) {
            return redirect()->back()->with('message', 'error');
        }

        return redirect()->back()->with('message', 'success');

    }


    public function contactRequest(ContactRequest $request)
    {
        $data = $request->only('name', 'sex', 'email', 'messages');

        $created = Contact::create($data);

        if (!$created) {
            return redirect()->back()->with('message', 'error');
        }

        Mail::send('emails.contact', ['contact' => $created], function ($m) use ($created) {
            $m->from($created->email);
            $m->to(env('MAIL_FROM_ADDRESS'))->subject('New Contact subject');
        });


        return redirect()->back()->with('message', 'success');

    }

    public function subscribeRequest(SubscribeRequest $request)
    {
        $email = $request->only('email');

        $created = Subscribe::create($email);

        if (!$created) {
            return redirect()->back()->with('message', 'error');
        }

        Mail::send('emails.subscribe', ['subscribe' => $created], function ($m) use ($created) {
            $m->from($created->email);
            $m->to(env('MAIL_FROM_ADDRESS'))->subject('New Subscriber');
        });

    }

}
