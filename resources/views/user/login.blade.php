@extends('layouts.app')
<div class="container">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand"></a>
      <form class="d-flex">
        <a class="btn btn-secondery g-2" href="{{ route("index")}}">{{ __('หน้าหลัก') }}</a>
      </form>
    </div>
  </nav>
</div>
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">

          <form class="com-md" action="{{ route('login.action')}}" method="post">
            <div class="card">
              <div class="card-body">
                <div class="btn d-flex justify-content-center">
                  <img src="upload/img/logo.png" alt="logo" style="width:300px">
              </div>
                <div class="mb-3 mt-2">
                  <h2 class="text-center">@yield('title', $title)</h2>
                  <label for="" class="form-label">{{ __('รหัสนักศึกษา') }}</label>
                  <input type="email" class="form-control" id="std_id" >
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">{{ __('รหัสผ่าน') }}</label>
                  <input type="password" class="form-control" id="password">
                </div>
                <div class="container col-md-6 text-center">
                  <button type="submit" class="btn btn-primary tex-center">{{ __('เข้าสู่ระบบ') }}</button>
                  <a class="btn btn-secondery mt-2" href="{{ route("register")}}">{{ __('ลงทะเบียนศิษย์เก่า') }}</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
@endsection