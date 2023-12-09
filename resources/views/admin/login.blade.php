<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <div class="container d-flex justify-content-center mt-4">
    
    <form style="min-width: 450px; margin-top: 20%" action="" method="POST">
      @if(!empty(session('error')))
          <div class="alert alert-danger">{{session('error')}}</div>
      @endif
        @csrf
        <div class="mb-4">
            <label class="form-label" for="form2Example1">Email address</label>
          <input type="email" id="form2Example1" name="email" class="form-control" />
        </div>
      
        <!-- Password input -->
        <div class="mb-4">
            <label class="form-label" for="form2Example2">Password</label>
          <input type="password" id="form2Example2" name="password" class="form-control" />
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
              <label class="form-check-label" for="form2Example31"> Remember me </label>
            </div>
          </div>
      
          <div class="col">
            <!-- Simple link -->
            <a href="#!">Forgot password?</a>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
      
        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="{{url('/register')}}">Register</a></p>
          
        </div>
      </form>
    </div>
</body>
</html>