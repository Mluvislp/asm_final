@extends('layout')
@section('content')
    
<section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="{{ URL::asset('assets/img/service/error.png') }}" alt="">
                </div>
               
             </div>           
             
             
          </div>


          <div class="col-lg-4">
             <div class="blog_right_sidebar">
                <aside class="single_sidebar_widget search_widget">
                        <h2>Bạn đang gặp lỗi </h2>
                        <a class="btn btn-primary" href="{{URL('/')}}" role="button">Quay lại về trang chủ</a>
                   </form>
                </aside>
                
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection



