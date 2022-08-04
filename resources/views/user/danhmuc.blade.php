@extends('layout')
@section('content')
    


<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Danh mục tin</h1>
        <p>
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container" style="width : 50%">
     
      @foreach ($data as $item)
        <div class="col">
          <div class="card shadow-sm">         
            <div class="card-body">
              <p class="card-text" style="font-weight: 500"> {{$item->ten}}.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="danhmuc/{{$item->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                </div>
                <small class="text-muted">Ngôn ngữ : {{$item->lang}}</small>
              </div>
            </div>
          </div>
        </div>
     
      @endforeach
       
       

      </div>
    </div>
  </div>


@endsection