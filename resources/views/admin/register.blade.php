<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.min.css"
rel="stylesheet"
/>
</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Your Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" value="{{old('name')}}" />
                </div>
                @error('name')
                <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
                </small>
                @enderror
                <div class=" mb-4">
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" value="{{old('email')}}"/>
                </div>
                @error('email')
                <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
                </small>
                @enderror

                <div class=" mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                </div>
                @error('password')
                <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
                </small>
                @enderror

                <div class="mb-4">
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="checkPass" />
                </div>
                @error('checkPass')
                <small class="form-text text-muted">
                  <div style="color:red">{{$message}}</div>
                </small> 
                @enderror 
                @if(!empty(session('checkPass')))
                <div style="color:red">{{session('checkPass')}}</div>
                @endif
                

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{Url('/login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"
></script>

</html>