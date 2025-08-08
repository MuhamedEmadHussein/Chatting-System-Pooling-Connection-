@extends('auth.layout')

    @section('content')
        <main class="auth-creative-wrapper">
            <div class="auth-creative-inner">
                <div class="creative-card-wrapper">
                    <div class="card my-4 overflow-hidden" style="z-index: 1">
                        <div class="row flex-1 g-0">
                            <div class="col-lg-6 h-100 my-auto">
                                <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50">
                                    <img src="assets/images/TRC - logo.png" alt="" class="img-fluid">
                                </div>
                                <div class="creative-card-body card-body p-sm-5">
                                    <h2 class="fs-20 fw-bolder mb-4">Register</h2>
                                    <h4 class="fs-13 fw-bold mb-2">Manage all your Duralux crm</h4>
                                    <p class="fs-12 fw-medium text-muted">Let's get you all setup, so you can verify your personal account and begine setting up your profile.</p>
                                    <form method="POST" action="{{ route('register') }}" class="w-100 mt-4 pt-2">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="text" class="form-control" name="first_name" id="inputFirstName" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                                            @error('first_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="text" class="form-control" name="last_name" id="inputLastName" placeholder="Last Name" value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email (Optional)" value="{{ old('email') }}">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="tel" class="form-control" name="phone" id="inputPhone" placeholder="Phone Number (+1234567890)" value="{{ old('phone') }}" required autocomplete="tel">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4 generate-pass">
                                            <div class="input-group field">
                                                <input type="password" class="form-control password" id="newPassword" placeholder="Password" name="password" required autocomplete="new-password">
                                                <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip" title="Generate Password"><i class="feather-hash"></i></div>
                                                <div class="input-group-text border-start bg-gray-2 c-pointer show-pass" data-bs-toggle="tooltip" title="Show/Hide Password"><i></i></div>
                                            </div>
                                            
                                            <div class="progress-bar mt-2">
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                            </div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control" placeholder="Password again" name="password_confirmation" required autocomplete="new-password">
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                                <label class="form-check-label c-pointer text-muted" for="terms" style="font-weight: 400 !important">I agree to all the <a href="#">Terms & Conditions</a> and <a href="#">Fees</a>.</label>
                                                @error('terms')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="mt-5">
                                            <button type="submit" class="btn btn-lg btn-primary w-100">Create Account</button>
                                        </div>
                                    </form>
                                    <div class="mt-5 text-muted">
                                        <span>Already have an account?</span>
                                        <a href="{{ route('login') }}" class="fw-bold">Login</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-primary">
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
    