
<!DOCTYPE html>
<html lang="en">
<head>
   @include('admin.head');
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
<<<<<<< HEAD
<<<<<<< HEAD
    <a href="../../index2.html"><b>COZA</b>STORE</a>
=======
    <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/tim_kiem_user_admin
=======
    <a href="/"><b>COZA</b>STORE</a>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
       @include('admin.alert')
      <form action="/admin/users/login/store" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
=======
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
        <a href="{{ route('facebook.login') }}" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="{{ url('auth/google') }}" class="btn btn-block btn-danger">
<<<<<<< HEAD
>>>>>>> origin/tim_kiem_user_admin
=======
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="forgot-password.html">I forgot my password</a>
=======
        <a href="/forgot-password">I forgot my password</a>
>>>>>>> origin/tim_kiem_user_admin
=======
        <a href="forgot-password.html">I forgot my password</a>
>>>>>>> origin/them_sp_vao_danh_sach_yeu_thich
      </p>
      <p class="mb-0">
        <a href="/admin/users/register" class="text-center">Register a new membership</a>
      </p>
    </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@include('admin.footer');

</body>
</html>
