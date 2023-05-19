<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Models\teacher;
use Illuminate\Support\Facades\Auth;


class teachercontroller extends Controller
{
    public function login()

    {
    
     
      return view('admin.teachers.teacherLogin' );
  
    
    }


    public  function uploadForm(){
        return view('admin.teachers.uploadfile');
    }


    public function doUpload(Request $request){
        $request->validate([
            'fileInput'=>'required|mimes:jpg,jpeg,png|max:2048',
        ]);
        $file=$request->file('fileInput');

        $filename=uniqid().'____'.$file->getClientOriginalName();
        $file->move(public_path().'/uploads',$filename);

        return back()
            ->with('success','فایل با موفقیت بارگذاری شد.')
            ->with('newFileName',$filename);
    }
}
