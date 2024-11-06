<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body class="register-page" style="min-height: 570.781px;">
    <div class="register-box">
        <div class="register-logo">
<<<<<<< HEAD
            <a href="#"><b>COZA</b>STORE</a>
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/tim_kiem_user_admin
        </div>
      
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Register a new membership</p>
                @include('admin.alert') <!-- Thông báo lỗi hoặc thành công -->

                <form action="/admin/users/register/store" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="input-group mb-3">
                        <select name="role" class="form-control" required>
                            <option value="" disabled selected>Chọn vai trò</option>
                            <option value="0">Người dùng</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
=======
                 
>>>>>>> origin/tim_kiem_user_admin
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
<<<<<<< HEAD
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
=======
                    <a href="{{ route('facebook.login') }}" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="{{ url('auth/google') }}" class="btn btn-block btn-danger">
>>>>>>> origin/tim_kiem_user_admin
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
      
                <a href="/admin/users/login" class="text-center">I already have a membership</a>
            </div>
        </div>
    </div>

    <!-- Các script có thể cần thiết cho giao diện -->
    @include('admin.footer')
</body>
</html>
