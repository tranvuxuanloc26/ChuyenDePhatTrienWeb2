<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.head')
</head>
<body class="register-page" style="min-height: 570.781px;">
    <div class="register-box">
        <div class="register-logo">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="#"><b>COZA</b>STORE</a>
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/tim_kiem_user_admin
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/search_product_admin
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/search_product
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/san_pham_noi_bat
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/san_pham_mơi_nhat
=======
            <a href="#"><b>COZA</b>STORE</a>
>>>>>>> origin/quan_ly_user
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/profile
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/lien_he_email
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/forgot_password
=======
            <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/doi_mat_khau
=======
            <a href="#"><b>COZA</b>STORE</a>
>>>>>>> origin/dang_nhap_google
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
                 
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
                 
>>>>>>> origin/search_product_admin
=======
                 
>>>>>>> origin/search_product
=======
                 
>>>>>>> origin/san_pham_noi_bat
=======
                 
>>>>>>> origin/san_pham_mơi_nhat
=======
                 
>>>>>>> origin/quan_ly_user
=======
                 
>>>>>>> origin/profile
=======
                 
>>>>>>> origin/lien_he_email
=======
                 
>>>>>>> origin/forgot_password
=======
                 
>>>>>>> origin/doi_mat_khau
=======
                 
>>>>>>> origin/dang_nhap_google
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/dang_nhap_google
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
<<<<<<< HEAD
                    <a href="#" class="btn btn-block btn-danger">
<<<<<<< HEAD
=======
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
                    <a href="{{ route('facebook.login') }}" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="{{ url('auth/google') }}" class="btn btn-block btn-danger">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
=======
>>>>>>> origin/search_product_admin
=======
>>>>>>> origin/search_product
=======
>>>>>>> origin/san_pham_noi_bat
=======
>>>>>>> origin/san_pham_mơi_nhat
=======
>>>>>>> origin/quan_ly_user
=======
>>>>>>> origin/profile
=======
>>>>>>> origin/lien_he_email
=======
>>>>>>> origin/forgot_password
=======
>>>>>>> origin/doi_mat_khau
=======
                    <a href="{{ url('auth/google') }}" class="btn btn-block btn-danger">
>>>>>>> origin/dang_nhap_google
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
