@extends('layout')
@section('content')
    
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title">New Post</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{URL('xuly/xulycapnhat')}}" method="post">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input value="{{$data->tomTat}}" class="form-control w-100" required name="tomTat" id="tomTat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tóm tắt'" placeholder="Nhập tóm tắt">
                                <input type="hidden" name="id" id="id" value="{{$data->id}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input value="{{$data->tieuDe}}"  class="form-control valid" required name="tieuDe" id="tieuDe" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập tiêu đề'" placeholder="Nhập tiêu đề">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input value="{{$data->urlHinh}}"  class="form-control valid" required name="urlImg" id="urlImg" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'URL IMAGE'" placeholder="URL IMAGE">
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="noidung">Nội dung bài viết</label>
                            <textarea value="{{$data->noiDung}}"  class="form-control" name="noidung" id="noidung" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            
                           <select name="idLT" class="form-control">
                          @foreach($danhmuc as $value)
                            <option value="{{$value->id}}">{{$value->ten}}</option>
                          @endforeach
                            </select>
                          
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Cập nhật</button>
                    </div>
                    @csrf
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Buttonwood, California.</h3>
                        <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>+1 253 565 2365</h3>
                        <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

@endsection

