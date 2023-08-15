<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Notifications\SendEmailNotification;
use Notification;


class AdminController extends Controller
{
    public function addview(){
        return view('admin.add_doctor');
    }



    public function upload(Request $request){

        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,jpg,gif|max:5120', // 5MB maximum
            // tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);
    
        $doktor = new Doctor();
        $image = $request->file('file'); // Gunakan method file() untuk mengakses file
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move('doctorimage', $imageName);
        $doktor->image = $imageName;
    
        $doktor->name = $request->name;
        $doktor->phone = $request->number;
        $doktor->room = $request->room;
        $doktor->speciality = $request->speciality;
    
        $doktor->save();
    
        return redirect()->back()->with("message", "Doctor Added Successfully");
    }

    public function showappointment(){

        $data= Appointment::all();
        return view('admin.showappointment',compact('data'));
    }


    public function approved($id){
        $data = Appointment::find($id);
        $data->status = 'approved';
        $data->save();
        return redirect()->back();
    }


    public function canceled($id){
        $data = Appointment::find($id);
        $data->status = 'Canceled   ';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor(){

        $data = Doctor::all();
        return view('admin.showdoctor',compact('data'));
    }


    public function deletedoctor($id){
        $data = Doctor::find($id);

        $data->delete();

        return redirect()->back();  
    }

    public function updatedoctor($id){

        $data = Doctor::find($id);

        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id){


        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $image = $request->file;

        if($image){


        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);
        $doctor->image = $imagename;
        }

        $doctor->save();

        return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }

    public function emailview($id){

        $data = Appointment::find($id);

        return view('admin.email_view',compact('data'));
    }

    public function sendemail(Request $request,$id){

        $data = Appointment::find($id);

        $details=[

            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart,

        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back();

    }
    

}
