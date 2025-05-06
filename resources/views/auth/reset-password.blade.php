@extends('../layout.main')

@section('content')





<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">

        </div>
    </div>
</div>
<!-- End Page Title -->

<!-- Start Login Area -->
<section class="login-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="login-content">
                    <h2>Enter your Email</h2>

                    <form class="login-form" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group">
                            <input type="email" class="form-control" value="{{ $email ?? '' }}" disabled>
                        </div>

                        <!-- Hidden Field to Submit Email -->
    <input type="hidden" name="email" value="{{ $email }}">

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" id="password" name="password">

                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">

                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="default-btn">Send Password</button>

                        @if(session('PasswordMessage'))
                        <p class="text-success">{{ session('PasswordMessage') }}</p>
                        @endif

                        <a href="" class="forgot-password">Back To Login</a>
                    </form>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->

@endsection
