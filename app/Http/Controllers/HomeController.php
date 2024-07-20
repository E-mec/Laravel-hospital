<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return view('user.home', compact('doctors'));
    }

    public function redirect()
    {
        if (Auth::id()) {

            if (Auth::user()->usertype == '0') {

                $doctors = Doctor::all();

                return view('user.home',  compact('doctors'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function appointment(Request $request)
    {
        $data = new Appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'In progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message', 'Your appointment has been received, we will contact you soon!');
    }

    public function myappointment()
    {
        $user = Auth::user()->id;
        $appoints = Appointment::where('user_id', $user)->get();

        return view('user.my_appointment', compact('appoints'));
    }

    public function cancel_appoint($id)
    {
        $data = Appointment::find($id);
        $data->delete();

        return redirect()->back();
    }

}
