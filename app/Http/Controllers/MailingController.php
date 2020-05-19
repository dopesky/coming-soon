<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionValidation;
use App\Mail\Launch;
use App\Mail\Subscribe;
use App\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailingController extends Controller {
    public function subscribe(SubscriptionValidation $request) {
        $email = $request->post('email');
        $user = (new User)->firstOrCreate(['email' => $email]);
        $user->suspended = false;
        $user->save();
        Mail::to($email)->send(new Subscribe($email));
        session()->flash('success', 'You have been Subscribed to our Mailing list.');
        return redirect()->back();
    }

    public function unsubscribe($base64_email) {
        $data['email'] = base64_decode($base64_email);
        $validator = Validator::make($data, ['email' => 'bail|required|email:rfc']);
        if ($validator->fails()) abort(404);
        $user = (new User)->firstOrCreate(['email' => $data['email']]);
        $user->suspended = true;
        $user->save();
        return view('contents.unsubscribe');
    }
}
