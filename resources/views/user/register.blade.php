@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('register.action') }}" class="col-md">
        @csrf
        <!--ส่วนที่ 1 ข้อมูลทั่วไป -->
        <h2 class="card-header text-center">@yield('title', $title)</h2>
        <div class="card mt-3">
            <h5 class="card-header">{{ __('ส่วนที่ 1 ข้อมูลทั่วไป') }}</h5>
            <div class="card-body">
                <div class="container-md">
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                <label for="std_id" class="form-label">{{ __('รหัสนักศึกษา') }}</label>
                                <input id="std_id" type="text" class="form-control @error('std_id') is-invalid @enderror" name="รหัสนักศึกษา" value="{{ old('std_id') }}" >
                            </div>
                            <div class="col-md-4 g-2">
                                <label for="gen_name" class="form-label">{{ __('รุ่น') }}</label>
                                <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                    <option selected>-เลือก-</option>
                                </select>
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="img_profile" class="form-label">{{ __('อัพโหลดรูปประจำตัว') }}</label>
                                <input id="img_profile" type="file" class="form-control @error('img_profile') is-invalid @enderror" name="img_profile" value="{{ old('img_profile') }}">
                            </div>
                        </div>
    
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                <label for="prefix" class="form-label">{{ __('คำนำหน้า') }}</label>
                                <select id="prefix" type="text" class="form-select @error('prefix') is-invalid @enderror" name="prefix" value="{{ old('prefix') }}">
                                    <option selected>-เลือก-</option>
                                    <option value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                </select>
                            </div>
                            <div class="col-md-4 g-2">
                                <label for="firstname" class="form-label">{{ __('ชื่อ') }}</label>
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" >
                            </div>
                            <div class="col-md-4 g-2">
                                <label for="lastname" class="form-label">{{ __('นามสกุล') }}</label>
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}">
                            </div>
                            <div class="col-md-2 g-2">
                                <label for="nickname" class="form-label">{{ __('ชื่อเล่น') }}</label>
                                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}">
                            </div>
                        </div>
    
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                <label for="gender" class="form-label">{{ __('เพศ') }}</label>
                                <select class="form-select" aria-label="gender" name="gender" value="{{ old('gender') }}"  autocomplete="gender" autofocus>
                                    <option selected>-เลือก-</option>
                                    <option value="1">ชาย</option>
                                    <option value="2">หญิง</option>
                                </select>
                            </div>
                            <div class="col-md-2 g-2">
                                <label for="birthdate" class="form-label">{{ __('วันเกิด') }}</label>
                                <input id="birthdate" type="date" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}">
                            </div>
                            <div class="col-md-2 g-2">
                                <label for="blood_type" class="form-label">{{ __('หมูเลือด') }}</label>
                                <select class="form-select" aria-label="blood_type" >
                                    <option selected>-เลือก-</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">AB</option>
                                    <option value="4">O</option>
                                </select>
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="email" class="form-label">{{ __('อีเมล') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                            </div>
    
                            <div class="col-md-2 g-2">
                                <label for="tel_number" class="form-label">{{ __('เบอร์โทร') }}</label>
                                <input id="tel_number" type="text" class="form-control @error('tel_number') is-invalid @enderror" name="tel_number" value="{{ old('tel_number') }}">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- ส่วนที่ 2 ข้อมูลทที่อยู่ -->
        <div class="card mt-3">
            <h5 class="card-header">{{ __('ส่วนที่ 2 ข้อมูลที่อยู่') }}</h5>
            <div class="card-body">
                <div class="container-md">
                        <div class="row pt-2">
                            <div class="col-md-1 g-2">
                                <label for="house_number" class="form-label">{{ __('บ้านเลขที่') }}</label>
                                <input id="house_number" type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number" value="{{ old('house_number') }}">
                            </div>
                            <div class="col-md-1 g-2">
                                <label for="village_number" class="form-label">{{ __('หมู่') }}</label>
                                <input id="village_number" type="text" class="form-control @error('village_number') is-invalid @enderror" name="village_number" value="{{ old('village_number') }}" >
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="road" class="form-label">{{ __('ถนน') }}</label>
                                <input id="road" type="text" class="form-control @error('road') is-invalid @enderror" name="road" value="{{ old('road') }}">
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="alley" class="form-label">{{ __('ซอย/ตรอก') }}</label>
                                <input id="alley" type="text" class="form-control @error('alley') is-invalid @enderror" name="alley" value="{{ old('alley') }}">
                            </div>
                        </div>   
                           
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                    <label for="sub_district" class="form-label">{{ __('ตำบล/แขวง') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                 
                            </div>
                            <div class="col-md-2 g-2">
                                    <label for="district" class="form-label">{{ __('อำเภอ/เขต') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                            <div class="col-md-3 g-2">
                                    <label for="province" class="form-label">{{ __('จังหวัด') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                            <div class="col-md-2 g-2">
                                    <label for="zipcode" class="form-label">{{ __('รหัสไปรษณีย์') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                        </div>
                </div>
            </div>
        </div>
       
        <!-- ส่วนที่ 3 ข้อมูลการทำงาน -->
        <div class="card mt-3">
            <h5 class="card-header">{{ __('ส่วนที่ 3 ข้อมูลการทำงาน') }}</h5>
            <div class="card-body">
                <div class="container-md">
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                <label for="career_status" class="form-label">{{ __('สถานภาพการทำงาน') }}</label>
                                <select class="form-select" aria-label="Default select" >
                                    <option selected>-เลือก-</option>
                                </select>
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="career" class="form-label">{{ __('อาชีพ') }}</label>
                                <input type="text" class="form-control" id="career" name="career" value="{{ old('career') }}"  autocomplete="career" autofocus>
                            </div>
                            <div class="col-md-4 g-2">
                                <label for="workplace" class="form-label">สถานที่ทำงาน</label>
                                <input type="text" class="form-control" id="workplace" name="workplace" value="{{ old('workplace') }}"  autocomplete="workplace" autofocus>
                            </div>
                        </div>   
                           
                        <div class="row pt-2">
                            <div class="col-md-2 g-2">
                                    <label for="workplace_sub-district" class="form-label">ตำบล/แขวง</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                            <div class="col-md-2 g-2">
                                    <label for="workplace_district" class="form-label">{{ __('อำเภอ/เขต') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                            <div class="col-md-3 g-2">
                                    <label for="workplace_probvince" class="form-label">{{ __('จังหวัด') }}</label>
                                    <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                        <option selected>-เลือก-</option>
                                    </select>
                                    
                            </div>
                            <div class="col-md-2 g-2">
                                    <label for="workplace_zipcode" class="form-label">{{ __('รหัสไปรษณีย์') }}</label>
                                    <input type="text" class="form-control" id="workplace_zipcode">
                                    
                            </div>
                        </div>
                </div>
            </div>
        </div>
    
        <!--set password -->
        <div class="card mt-3">
            <h5 class="card-header">{{ __('ตั้งค่ารหัสผ่าน') }}</h5>
            <div class="card-body">
                <div class="container-md">
                    <div class="col-md needs-validation">
                        <div class="row pt-2">
                            <div class="col-md-3 g-2">
                                <label for="password" class="form-label">{{ __('รหัสผ่าน') }}</label>
                                <input id="password" type="password" class="form-control" name="password">
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="password-confirm" class="form-label">{{ __('ยืนยันรหัสผ่าน') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- button submit -->
        <div class="container-md mt-3 mb-3">
            <div class="btn d-flex justify-content-center">
                <button type="submit" class="btn btn-primary g-2">{{ __('ลงทะเบียน') }}</button>
                <a class="btn btn-secondery g-2" href="{{ route("index")}}">{{ __('ยกเลิก') }}</a>
            </div>
        </div>
    </form>
    </div>
@endsection