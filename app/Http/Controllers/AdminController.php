<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

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
    

}
