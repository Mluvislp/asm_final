@extends('layout')

@section('content')
     

  <div class="about-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
            <!-- Trending Tittle -->
            <div class="about-right mb-90">
                <div class="about-img">
                    <img src="assets/img/trending/trending_top.jpg" alt="">
                </div>
                <div class="section-tittle mb-30 pt-30">
                    <h3> {{$data->tieuDe}}</h3>
                    <h5 class="blog-post-title mb-1"> {{$data->ngayDang}}</h5>
                    <p class="blog-post-meta">View :  {{$data->xem}}</p>
                </div>
                <div class="about-prea">
                  <p> {{$data->tomTat}}</p>
                    <p class="about-pera1 mb-25">
                      {{print($data->noiDung)}}</p>
                </div> 
                <div class="social-share pt-30">
                  <div class="section-tittle">
                      <h3 class="mr-20">Share:</h3>
                      <ul>
                          <li><a href="#"><img src="{{ URL::asset('assets/img/news/icon-ins.png') }}" alt=""></a></li>
                          <li><a href="#"><img src="{{ URL::asset('assets/img/news/icon-fb.png') }}" alt=""></a></li>
                          <li><a href="#"><img src="{{ URL::asset('assets/img/news/icon-tw.png') }}" alt=""></a></li>
                          <li><a href="#"><img src="{{ URL::asset('assets/img/news/icon-yo.png') }}" alt=""></a></li>
                          <li><a href="{{URL('xuly/capnhat/'.$data->id)}}" class="genric-btn warning">Cập nhật</a></li>
                          <li><a href="{{URL('xuly/xoa/'.$data->id)}}" class="genric-btn danger">Xóa</a></li>
                      </ul>
                  </div>
              </div>
                
            </div>
           
        </div>
        </div>
      </div>
    </div>
@endsection


