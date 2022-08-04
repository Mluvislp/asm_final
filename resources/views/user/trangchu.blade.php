@extends('layout')

@section('content')
    
<section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    @foreach ($data as $item)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>{{$item->ngayDang}}</h3>
                                
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="tin/chitiet/{{$item->id}}">
                                    <h2>{{$item->tieuDe}}</h2>
                                </a>
                                <p>{{$item->tomTat}}</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                    @endforeach   
                    

                    

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            {{ $data->links() }}
                        </ul>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Search Keyword'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Search Keyword'">
                                    <div class="input-group-append">
                                        <button class="btns" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Search</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            @foreach ($danhmuc as $item)
                            <li>
                                <a href="tin/danhmuc/{{$item->id}}" class="d-flex">
                                    <p>{{$item->ten}}</p>
                                </a>
                            </li>
                            @endforeach                            
                            
                        </ul>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                {{ $danhmuc->links() }}
                            </ul>
                        </nav>
                    </aside>
                    
                    
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                            <li>
                                <a href="#">technology</a>
                            </li>
                            <li>
                                <a href="#">travel</a>
                            </li>
                            <li>
                                <a href="#">restaurant</a>
                            </li>
                            <li>
                                <a href="#">life style</a>
                            </li>
                            <li>
                                <a href="#">design</a>
                            </li>
                            <li>
                                <a href="#">illustration</a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget instagram_feeds">
                        <h4 class="widget_title">Instagram Feeds</h4>
                        <ul class="instagram_row flex-wrap">
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_5.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_6.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_7.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_8.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_9.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="img-fluid" src="assets/img/post/post_10.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </aside>


                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 

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
                                    <img src="assets/img/logo/logo2.png" alt="">
                                </div>
                                <div class="trend-bottom-cap">
                                    <span class="color1">{{$item->ngayDang}}</span>
                                    <h4><a href="tin/chitiet/{{$item->id}}">{{$item->tieuDe}}</a></h4>
                                </div>
                            </div>
                            </div>
                            
                            @endforeach   
                           

                        </div>
                    </div>
                </div>
                <!-- Riht content -->
                <div class="col-lg-4">
                    <p class="fs-2">Danh mục</p>
                    @foreach ($danhmuc as $item)
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="assets/img/trending/right1.jpg" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">{{$item->lang}}</span>
                                <h4><a href="tin/danhmuc/{{$item->id}}">{{$item->ten}}</a></h4>
                            </div>
                        </div>    
                                        <li><a href="about.html"></a></li>
                    @endforeach  
                    {{ $danhmuc->links() }}
                   
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
