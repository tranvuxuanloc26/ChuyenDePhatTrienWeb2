
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
<<<<<<< HEAD
<<<<<<< HEAD
    <a href="../../index2.html"><b>Admin</b>LTE</a>
=======
    <a href="../../index2.html"><b>COZA</b>STORE</a>
>>>>>>> register
=======
    <a href="../../index2.html"><b>COZA</b>STORE</a>
>>>>>>> logout
=======
    <a href="../../index2.html"><b>COZA</b>STORE</a>
>>>>>>> phan_quyen
=======
    <a href="../../index2.html"><b>COZA</b>STORE</a>
>>>>>>> menu_admin_detail
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
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <a href="register.html" class="text-center">Register a new membership</a>
=======
        <a href="/admin/users/register" class="text-center">Register a new membership</a>
>>>>>>> register
=======
        <a href="/admin/users/register" class="text-center">Register a new membership</a>
>>>>>>> logout
=======
        <a href="/admin/users/register" class="text-center">Register a new membership</a>
>>>>>>> phan_quyen
=======
        <a href="/admin/users/register" class="text-center">Register a new membership</a>
>>>>>>> menu_admin_detail
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
