@extends('layout')

@section('content')
<div class="container" style="padding: 10px">
     @foreach ($data as $item)
        <a href="chitiet/{{$item->id}}" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
            <h6 class="mb-0"> {{$item->tieuDe}}</h6>
            {{-- <p class="mb-0 opacity-75"> {{$item->tieuDe}}.</p> --}}
            </div>
            <small class="opacity-50 text-nowrap"> {{$item->ngayDang}}</small>
        </div>
        </a>       
    @endforeach      
</div>
   
@endsection
