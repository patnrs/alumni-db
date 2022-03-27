<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\Career;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'ลงทะเบียนศิษย์เก่า';
        return view('user/register', $data);
    }

    public function register_action(Request $request){
        
        $request->validate([

            'std_id' => 'required|unique:user_alumni|max:11',
            'prefix' => 'required',
            'gen_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'tel_number' => 'required',
            'email' => 'required|unique:user_alumni',
            'password' => 'required|min:8',
            'blood_type' => 'required',
            'image_profile' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',

            'house_number' => 'required',
            'village_number' => 'required',
            'alley' => 'required',
            'sub_district' => 'required',
            'district' => 'required',
            'province' => 'required',
            'zipcode' => 'required',

            'career_status' => 'required',
            'career' => 'required',
            'workplace' => 'required',
            'workplace_sub_district' => 'required',
            'workplace_district' => 'required',
            'workplace_province' => 'required',
            'workplace_zipcode' => 'required',
        ]);
        
        $user = new User([
            'std_id' => $request->std_id,
            'prefix' => $request->prefix,
            'gen_id' => $request->gen_id,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'gender' => $request->gender,
            'birthdate' => $request->birthdate,
            'tel_number' => $request->tel_number,
            'email' => $request->email,
            'password' => Hash::make($request->std_id) ,
            'blood_type' => $request->blood_type,
            'image_profile' => $request->image_profile,
            
        ]);
        $user->save();
        
        $address = new Career([
            'std_id' => $request->std_id,
            'house_number' => $request->house_number,
            'village_number' => $request->village_number,
            'alley' => $request->alley,
            'sub_district' => $request->sub_district,
            'district' => $request->district,
            'province' => $request->province,
            'zipcode' => $request->zipcode,

        ]);
        $address->save();

        $career = new Address([
            'std_id' => $request->std_id,
            'career_status' => $request->career_status,
            'career' => $request->career,
            'workplace' => $request->workplace,
            'workplace_sub_district' => $request->workplace_sub_district,
            'workplace_district' => $request->workplace_district,
            'workplace_province' => $request->workplace_province,
            'workplace_zipcode' => $request->workplace_zipcode,

        ]);
        $career->save();
        return redirect()->route('user.login')->with('success','ลงทะเบียนศิษย์เก่าเรียบร้อย !!!');
    }
}
