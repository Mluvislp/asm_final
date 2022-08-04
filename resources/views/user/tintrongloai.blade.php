@extends('layout')
@section('content')
    


<main>


  

<div class="trending-area fix">
  <div class="container">
      <div class="trending-main">
          <!-- Trending Tittle -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="trending-tittle">
                      <strong>PS17869</strong>
                      <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                      <div class="trending-animated">
                          <ul id="js-news" class="js-hidden">
                              <li class="news-item">Chính quyền Ukraina cắt đứt ngoại giao với Triều Tiên.</li>
                              <li class="news-item">Chi tiết mới trong vụ sát hại cựu thủ tướng Nhật bản</li>
                              <li class="news-item">Lạm phát Mỹ tăng cao, người dân lao đao.</li>
                          </ul>
                      </div>
                      
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-lg-8">                  
                  <div class="trending-bottom">
                      <div class="row">
                        @foreach ($data as $item)

                          <div class="col-lg-4">
                          <div class="single-bottom mb-35">
                              <div class="trend-bottom-img mb-30">
                                  <img src="{{ URL::asset('assets/img/logo/logo2.png') }}" alt="">
                              </div>
                              <div class="trend-bottom-cap">
                                  <span class="color1">{{$item->ngayDang}}</span>
                                  <h4><a href="{{url('tin/chitiet/'.$item->id)}}">{{$item->tieuDe}}</a></h4>
                              </div>
                          </div>
                          </div>
                          
                          @endforeach   
                         
                        
                      </div>
                  </div>
                  <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        {!! $data->fragment('foo')->links() !!}
                    </ul>
                </nav>
                
              </div>
              
              <!-- Riht content -->
              <div class="col-lg-4">
                  <p class="fs-2">Danh mục</p>
                  @foreach ($danhmuc as $item)
                      <div class="trand-right-single d-flex">
                          <div class="trand-right-img">
                              <img src="{{ URL::asset('assets/img/trending/right1.jpg') }}" alt="">
                          </div>
                          <div class="trand-right-cap">
                              <span class="color1">{{$item->lang}}</span>
                              <h4><a href="{{url('tin/danhmuc/'.$item->id)}}">{{$item->ten}}</a></h4>
                          </div>
                      </div>    
                                      <li><a href="about.html"></a></li>
                  @endforeach  
                  <nav class="blog-pagination justify-content-center d-flex">
                    <ul class="pagination">
                        {{ $danhmuc->links() }}
                    </ul>
                </nav>

                 
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

