@extends('admin.layouts.app')

@section('content')
<div class="container d-flex justify-content-center mt-4">
    
    <form style="min-width: 450px; margin-top: 5%" action="" method="POST" enctype="multipart/form-data">
      @if(!empty(session('error')))
          <div class="alert alert-danger">{{session('error')}}</div>
      @endif
        @csrf
        <div class="mb-4">
            <label class="form-label" for="form2Example1">Name</label>
          <input type="text" id="form2Example1" name="name" value="{{$product->name}}" class="form-control" />
        </div>
        @error('name')
        <small class="form-text text-muted">
          <div style="color:red">{{$message}}</div>
        </small>
        @enderror
        
        <div class="mb-4">
            <label class="form-label" for="form2Example2">Description</label>
          <input type="text" id="form2Example2" name="description" value="{{$product->description}}" class="form-control" />
        </div>
        @error('description')
        <small class="form-text text-muted">
          <div style="color:red">{{$message}}</div>
        </small>
        @enderror
        <div class="mb-4">
          <label class="form-label" for="form2Example2">Price</label>
          <input type="text" id="form2Example2" name="price" value="{{$product->price}}" class="form-control" />
        </div>
        @error('price')
        <small class="form-text text-muted">
          <div style="color:red">{{$message}}</div>
        </small>
        @enderror
        
        <div class="mb-4">
          <label class="form-label" for="form2Example2">Image</label>
          <input type="file" id="form2Example2" name="image" class="form-control" />
          <input type="hidden" id="form2Example2" name="imageOld" value="{{$product->image}}" class="form-control" />
        </div>
        @error('image')
        <small class="form-text text-muted">
          <div style="color:red">{{$message}}</div>
        </small>
        @enderror
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Thêm</button>
      
      </form>
    </div>
@endsection