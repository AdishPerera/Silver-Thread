@extends('layouts.app')

<head>
        <title>Reset Password</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
</head>

@section('content')

<div class="signinbox">
<img src="images/avtr.jpg"  class="avatar">
        <h1>Reset Password </h1>

               <div class="card-body">
                    @if (session('status'))
                         <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <form method="POST" action="/forget-password">
                        @csrf
                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   <div class="form-group row mb-0">
                         <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
