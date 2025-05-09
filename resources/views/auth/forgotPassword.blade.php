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

                    <form class="login-form" method="POST" action="{{ route('sndpassword') }}">
                        @csrf

                        <div class="form-group">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter Your Email" value="{{ old('email') }}" required>

                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="default-btn">Send Password Reset Link</button>

                        @if(session('success'))
                        <p class="text-success">{{ session('success') }}</p>
                        @endif

                        <a href="{{ route('login') }}" class="forgot-password">Back To Login</a>
                    </form>




                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Area -->

@endsection
