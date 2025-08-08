<!DOCTYPE html>
<html lang="zxx">

<?php include './partials/head.php'?>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-creative-wrapper">
        <div class="auth-creative-inner">
            <div class="creative-card-wrapper">
                <div class="card my-4 overflow-hidden" style="z-index: 1">
                    <div class="row flex-1 g-0">
                        <div class="col-lg-6 h-100 my-auto order-1 order-lg-0">
                            <div class="wd-50 bg-white p-2 rounded-circle shadow-lg position-absolute translate-middle top-50 start-50 d-none d-lg-block">
                                <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                            </div>
                            <div class="creative-card-body card-body p-sm-5">
                                <h2 class="fs-20 fw-bolder mb-4">Login</h2>
                                <h4 class="fs-13 fw-bold mb-2">Login to your account</h4>
                                <p class="fs-12 fw-medium text-muted">Thank you for get back <strong>Nelel</strong> web applications, let's access our the best recommendation for you.</p>
                                <form action="index.php" class="w-100 mt-4 pt-2">
                                    <div class="mb-4">
                                        <input type="email" class="form-control" placeholder="Email or Username" value="wrapcode.info@gmail.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Password" value="123456" required>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                <label class="custom-control-label c-pointer" for="rememberMe">Remember Me</label>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="auth-reset-creative.php" class="fs-11 text-primary">Forget password?</a>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-lg btn-primary w-100">Login</button>
                                    </div>
                                </form>
                                <div class="w-100 mt-5 text-center mx-auto">
                                    <div class="mb-4 border-bottom position-relative"><span class="small py-1 px-3 text-uppercase text-muted bg-white position-absolute translate-middle">or</span></div>
                                    <div class="d-flex align-items-center justify-content-center gap-2">
                                        <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Facebook">
                                            <i class="feather-facebook"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Twitter">
                                            <i class="feather-twitter"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-light-brand flex-fill" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Login with Github">
                                            <i class="feather-github text"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mt-5 text-muted">
                                    <span> Don't have an account?</span>
                                    <a href="auth-register-creative.php" class="fw-bold">Create an Account</a>
                                </div>
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
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>	
</body>

</html>