<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Response;
use DB;
use Image;


class StudentController extends Controller
{
     public function index()
    {
        // $user_id = Auth::id();
        // $calendars = Calendar::where('user_id', '=', $user_id)
        //             ->get();
        // return Response::json($calendars->toArray());
        
                    
        $students = DB::table('students')->orderBy('lastname', 'asc')->get();
        
        return Response::json($students);
    }
    

    public function store(Request $request)
    {
       
        $firstname = Input::get('firstname');
        $lastname = Input::get('lastname');
        $email = Input::get('email');
        $dob = Input::get('dob');
        $phone = Input::get('phone');
        $parents = Input::get('parents');
        $pic = Input::get('pic');
        $idform = Input::get('idform');
        
        
        $id = Student::create(array(
            'firstname'=> $firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'dob'=>$dob,
            'phone'=>$phone,
            'parents'=>$parents,
            'pic'=>$pic,
            'idform'=>$idform
            ))->id;
        
        $students = DB::table('students')->orderBy('lastname', 'asc')->get();
        
        $i=0;
        foreach($students as $student)
        {
            $student->position = $i;
            $i = $i + 1;
            if($student->id == $id){
               $addedStudent = $student; 
            }
        }
        
        return Response::json($addedStudent);
        
        
            
        // $addedStudentId= DB::table('students')->where('email', '=', $email)->value('id');
        // return Response::json(['firstname'=> $firstname,
        //     'lastname'=>$lastname,
        //     'email'=>$email,
        //     'dob'=>$dob,
        //     'phone'=>$phone,
        //     'parents'=>$parents,
        //     'pic'=>$pic,
        //     'idform'=>$idform,
        //     'id'=>$addedStudentId]);  
    }

   
    public function update($id)
    {
        
        $firstname = Input::get('firstname');
        $lastname = Input::get('lastname');
        $email = Input::get('email');
        $dob = Input::get('dob');
        $phone = Input::get('phone');
        $parents = Input::get('parents');
        // $oldpic = Input::get('oldPic');
        $pic = Input::get('pic');
        $idform = Input::get('idform');
        
        
        // if($oldpic !="" && $oldpic != $pic){
        //     unlink(public_path($oldpic));
        // }
        
        DB::table('students')->where('id', '=', $id)->update(['firstname'=> $firstname,
            'lastname'=>$lastname,
            'email'=>$email,
            'dob'=>$dob,
            'phone'=>$phone,
            'parents'=>$parents,
            'pic'=>$pic,
            'idform'=>$idform]);;
        
        $updatedStudent = DB::table('students')->where('id', '=', $id)->get();
       
        return Response::json($updatedStudent);
    }

    
    public function destroy($id)
    {
        
        $pic = DB::table('students')->where('id', '=', $id)->value('pic');
        $idform = DB::table('students')->where('id', '=', $id)->value('idform');
        if($pic !=""){
            unlink(public_path($pic));
        }
        if($idform !=""){
            unlink(public_path($idform));
        }
              
        DB::table('students')->where('id', '=', $id)->delete();
                
        return Response::json(array('success'=>true));
    }



    public function upload(){
        $file = Input::file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = $file->getFilename().'.'.$extension;
        
        $file->move(public_path('student_pictures'), $fileName);
        $picUrl = "student_pictures". '/'. $fileName;
        
        return $picUrl;
    }
    
    public function deletePicture(Request $request){
        $pic = Input::get('pic');
        unlink(public_path($pic));
        
        return Response::json(array('success'=>true));
    }
}