@extends('admin.layouts.app')

@section('content')
    <div class="container m-3 d-flex justify-content-around flex-wrap mw-100">
    @if(!empty($products))
     @foreach($products as $item)
     <div class="card col-4 mr-2 ml-2" style="width: 20%">
        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
          <img src="{{asset('assets/images/'.$item->image)}}" class="img-fluid"/>
          
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$item->name}}</h5>
          @if(Auth::check()) <p class="card-text center">{{$item->price}}</p>
          @else <p class="card-text center">Liên hệ</p>
          @endif
          <p class="card-text">{{$item->description}}</p>
          <a href="{{route('update', ['id' => $item->id])}}" class="btn btn-primary" data-mdb-ripple-init>Update</a>
          <a href="{{route('delete', ['id' => $item->id])}}" class="btn btn-primary p-2" data-mdb-ripple-init>
            <button style="border: none; background: none; color: #fff;" onclick="confirmDelete({{ $item->id }})">DELETE</button>
          </a>
        </div>
      </div>
     @endforeach
    @endif
    </div>
@endsection

@section('js')
<script>
    function confirmDelete(productId) {
        if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')) {
            var form = document.getElementById('delete-form');
            form.action = '/products/' + productId;
            form.submit();
        }
    }
</script>
@endsection