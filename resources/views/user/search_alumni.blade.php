@extends('layouts.app')
<div class="container">
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand"></a>
      <form class="d-flex">
        <a class="btn btn-secondery g-2" href="{{ route("login")}}">{{ __('เข้าสู่ระบบ') }}</a>
        <a class="btn btn-secondery g-2" href="{{ route("register")}}">{{ __('ลงทะเบียนศิษย์เก่า') }}</a>
      </form>
    </div>
  </nav>
</div>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg">
              <form class="col-lg" action="{{ route('search_alumni')}}" method="get">
                <div id="search" class="card">
                  <div class="card-body">
                    <div class="mb-3">
                          <div class="container-md">
                            <h2 class="text-center mt-2">@yield('title', $title)</h2>
                            <div class="row pt-1">
                              <div class="col-md-3 g-2">
                                <label for="firstname" class="form-label">{{ __('รหัสนักศึกษา') }}</label>
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" >
                              </div>
                              <div class="col-md-3 g-2">
                                <label for="firstname" class="form-label">{{ __('ชื่อ - สกุล') }}</label>
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" >
                              </div>
                            <div class="col-md-3 g-2">
                                <label for="lastname" class="form-label">{{ __('รุ่น') }}</label>
                                <select id="gen_id" type="text" class="form-select @error('gen_id') is-invalid @enderror" name="gen_id" value="{{ old('gen_id') }}">
                                  <option selected>-เลือก-</option>
                              </select>
                            </div>
                            <div class="col-md-3 g-2">
                                <label for="nickname" class="form-label">{{ __('อาชีพ') }}</label>
                                <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}">
                            </div>
                            <div class="container-md mt-3 g-2">
                              <div class="btn d-flex justify-content-center">
                                  <button type="submit" class="btn btn-primary g-2">{{ __('ลงทะเบียน') }}</button>
                              </div>
                          </div>
                              
    
                            </div>
                          </div>
                        
                  </div>
                </div>
              </form>
            </div>

            <div id="result-search" class="card">
              <div class="card-body">
                <div class="col-lg">
                  <h3>ผลการค้นหาข้อมูลศิษย์เก่า</h3>
                    <table class="table table-striped">
                    <tr>
                      <th>ลำดับ</th>
                      <th>รหัสนักศึกษา</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>รุ่น</th>
                      <th>เบอร์โทร</th>
                      <th>อาชีพ</th>
                    </tr>
                    </table>

                    <tr>
                      <th>{{ __('-ไม่พบข้อมูลการค้นหา-') }}</th>
                    </tr>
                  </div>
              </div>
            </div>

          </div>
    </div>
@endsection