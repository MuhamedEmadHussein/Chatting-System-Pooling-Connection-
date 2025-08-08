@extends('auth.layout')


@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session('error') }}',
        });
    </script>
@endif


    @section('content')
        <main class="auth-creative-wrapper">
            <div class="auth-creative-inner">
                <div class="creative-card-wrapper">
                    <div class="card my-4 overflow-hidden" style="z-index: 1">
                        <div class="row flex-1 g-0">
                            <div class="col-lg-6 h-100 my-auto order-1 order-lg-0">
                                <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50 d-none d-lg-block">
                                    <img src="assets/images/TRC - logo.png" alt="" class="img-fluid">
                                </div>
                                <div class="creative-card-body card-body p-sm-5">
                                    <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                                    <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                                    <form method="POST" action="{{ route('login') }}" class="w-100 mt-4 pt-2">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email" aria-describedby="email-error">
                                            @error('email')
                                                <span id="email-error" class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4 generate-pass">
                                            <div class="input-group field">
                                                <input name="password" type="password" class="form-control password" id="newPassword" placeholder="Password" required aria-describedby="password-error">
                                                <div class="input-group-text border-start bg-gray-2 c-pointer show-pass" data-bs-toggle="tooltip" title="Show/Hide Password"><i></i></div>
                                            </div>
                                            @error('password')
                                                <span id="password-error" class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        {{-- <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                                    <label class="form-check-label c-pointer" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <div>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="fs-11 text-primary">Forgot password?</a>
                                                @endif
                                            </div>
                                        </div> --}}
                                        <div class="mt-5">
                                            <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-primary order-0 order-lg-1">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <img src="assets/images/auth/auth-user.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--! ================================================================ !-->
        <!--! [End] Main Content !-->
        <!--! ================================================================ !-->
    @endsection