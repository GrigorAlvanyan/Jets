<?php

namespace App\Http\Controllers;

use App\Flight;
use App\Http\Requests\ContactInformationRequest;
use App\Http\Requests\ContinentRequest;
use App\Menu;
use Illuminate\Http\Request as RequestAlias;
use Illuminate\Support\Facades\Request;
use libphonenumber\NumberParseException;
use libphonenumber\PhoneNumberUtil;
use Stevebauman\Location\Facades\Location;


class ContactInfoController extends YourJetsController
{
    public function contactInfo()
    {

        $ip = \request()->ip();

        $loc = Location::get('2.17.249.0');
        $countryCode = $loc->countryCode ?? 'am';
        $countryCode = strtolower($countryCode);


        return view('contact_info', compact('countryCode'));
    }

    protected function checkPhoneNumber($phone, $country = 'AM')
    {
        $swissNumberStr = $phone;
        $phoneUtil = \libphonenumber\PhoneNumberUtil::getInstance();
        try {
            $swissNumberProto = $phoneUtil->parse($swissNumberStr, $country);
        } catch (\libphonenumber\NumberParseException $e) {
            return false;
        }

        $isValid = $phoneUtil->isValidNumber($swissNumberProto);

        return $isValid;
    }

    public function contactInformationSubmit(ContactInformationRequest $request)
    {

        $data = $request->only('name', 'last_name', 'email', 'phone_number', 'additional_info');

        $country = countryByIp($request->ip());

        $phoneNumber = $data['phone_number'];

        if ($this->checkPhoneNumber($phoneNumber, $country)) {

        }

        $created = Flight::create($data);

        if (!$created) {
            return redirect()->back()->with('message', 'error');
        }
        return redirect()->back()->with('message', 'success');
    }
}
