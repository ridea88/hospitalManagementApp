<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

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
    

}
