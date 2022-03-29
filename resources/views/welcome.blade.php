@extends('layouts.app')
@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">

          <form class="com-lg" action="{{ route('login.action')}}" method="post">
            <div class="card">
              <div class="card-body">
                <div class="btn d-flex justify-content-center">
                  <img src="upload/img/logo.png" alt="logo" style="width:400px">
              </div>
                <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-outline-primary" type="button"><a  href="{{ route("search_alumni")}}">{{ __('ค้นหาข้อมูลศิษย์เก่า') }}</a></button>
                  </div>
                  <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-outline-primary" type="button"><a  href="{{ route("login")}}">{{ __('เข้าสู่ระบบ') }}</a></button>
                  </div>
                  <div class="d-grid gap-2 mt-3">
                    <button class="btn btn-outline-primary" type="button"><a  href="{{ route("register")}}">{{ __('ลงทะเบียนศิษย์เก่า') }}</a></button>
                  </div>
              </div>
            </div>
          </form>
        </div>
        
      </div>
    </div>
@endsection