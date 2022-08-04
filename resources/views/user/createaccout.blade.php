@extends('layout')
@section('content')
    
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="{{ URL::asset('assets/img/logo/logo2.png') }}"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">HoangHaiDang-ASM</h4>
                  </div>
  
                  <form>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control"/>
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example22" class="form-control" />
                        <label class="form-label" for="form2Example22">Gmail</label>
                      </div>
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Đăng ký</button>
                      <a class="text-muted" href="#!">Quên mật khẩu ?</a>
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                        <li> <p class="mb-0 me-2">Đa có tài khoản ? </p></li>
                        <li><a href="{{ url()->route('login')}}" class="genric-btn danger">Đăng nhập ngay</a></li>
                      </div>
    
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


