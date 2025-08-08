<!DOCTYPE html>
<html lang="zxx">

<?php include './partials/head.php'?>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="assets/images/auth/auth-cover-resetting-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-50 mb-5">
                        <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Resetting</h2>
                    <h4 class="fs-13 fw-bold mb-2">Reset to your password</h4>
                    <p class="fs-12 fw-medium text-muted">Enter your email and a reset link will sent to you, let's access our the best recommendation for you.</p>
                    <form action="index.php" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Conform Password" required>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Save Change</button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted">
                        <span> Don't have an account?</span>
                        <a href="auth-register-cover.php" class="fw-bold">Create an Account</a>
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