<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentsMail;
use Illuminate\Support\Facades\Mail;

class AppointmentsController extends Controller
{
    public function index()
    {
        return view('appointments.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'birthday' => 'required',
            'social_security_number' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'piece' => 'required',
            'pay_method' => 'required',
            'city' => 'required',
            'address' => 'required',
            'zip_code' => 'required',
            'gdpr' => 'required',
            'is_nurse' => 'required',
            'statement' => 'required'
        ]);

        if ($request->piece > 5 || $request->is_nurse) {
            $total = $request->piece * 9200;
        } else {
            $total = $request->piece * 11500;
        }

        $request['total'] = $total;

        $piece = $request['piece'];
        
        $latestOrder = Appointment::orderBy('created_at','DESC')->first();

        if ($latestOrder == null) {
            $request['order_number'] = 1000;
        } else {
            $request['order_number'] = $latestOrder['order_number'] + 1;
        }

        $appointment = Appointment::create($request->all());

        $orderNumber = $appointment->order_number;
        
        \Mail::to($request->email)
            ->send(new \App\Mail\AppointmentsMail($request->all()));

        \Mail::to('info@covidvirusteszt.hu')
            ->send(new \App\Mail\NewApply($request->all()));

        return view('appointments.greeting', compact('orderNumber', 'piece', 'total'));
    }
}
