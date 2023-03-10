@extends('base')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container col-md-4 offset-md-4 mt-5">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <div class="card shadow mb-5 rounded border border-light">
            <div class="card-header bg-info">
                <h3 class="text-center mt-2">LOG IN</h3>
            </div>
            <div class="card-body">
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-5 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}">Sign up for an account</a>
                        </div>
                        <button class="btn btn-primary px-5" type="submit">Login</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

@endsection

<style>
#basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: black;
}
body{
    background-image: url("images/op.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>

<!-- <script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script> -->
