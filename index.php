<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login | SIMRS</title>
  <link rel="shortcut icon" href="https://i0.wp.com/rsudibnusina.gresikkab.go.id/wp-content/uploads/2020/04/Palang-hijau.png?w=640&ssl=1"type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS & JS-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- fontawesome -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-image: url('https://static.vecteezy.com/system/resources/previews/006/712/981/original/abstract-health-medical-science-healthcare-icon-digital-technology-science-concept-modern-innovation-treatment-medicine-on-hi-tech-future-blue-background-for-wallpaper-template-web-design-vector.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }

    .alert {
      margin-top: 10px;
      padding: 10px;
      background-color: #f44336;
      color: white;
      margin-bottom: 15px;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }

    .card {
      border: none;
      box-shadow: 0px 4px 30px rgba(0, 0, 0, 0.8);
      border-radius: 20px;
      background-color: white;
      color: black;
    }

    .card-header {
      border-bottom: none;
      border-radius: 20px 20px 0 0;
    }

    .card-title {
      font-size: 24px;
      font-weight: 600;
      color: black;
      margin-bottom: 0;
    }

    .form-control {
      border-radius: 20px;
      padding: 12px;
      font-size: 16px;
      border: 2px solid #f0f0f0;
      box-shadow: none;
    }

    .form-control:focus {
      border-color: black;
      box-shadow: none;
    }

    .btn-primary {
      background-color: blue;
      border: none;
      border-radius: 20px;
      font-size: 16px;
      font-weight: 600;
      padding: 12px;
      width: 100%;
      margin-top: 20px;
    }
    .btn-primary:hover {
      background-color: black;
    }
  </style>
  <!-- Jquery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(".card").slideDown(1200);
    });
  </script>
  <!-- Jquery -->
</head>
<body>
<div class="container">
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col-lg-4 col-md-6 col-sm-8 mt-5 mb-5">
      <div class="card p-4"style="display: none;">
        <div class="card-header">
          <h2 class="card-title text-center mb-0" style="font-family: Arial; color: black;">LOGIN ADMIN</h2>
        </div>
        <div class="card-body">
          <img src="https://4.bp.blogspot.com/-x2zTsdZxzss/WCxmgyg7MNI/AAAAAAAAKME/Wn16dbl6avUpDb-zOS66ox8_yyWHLQ_LwCLcB/s1600/bitebrands%2B-%2Blogo%2Brumah%2Bsakit%2Bindonesia%2Bdunia%2B-01.jpg" class="d-block mx-auto my-5" style="max-width: 200px;" alt="">
          <?php
            if (isset($_POST['login'])) {
              $user = $_POST['username'];
              $pass = $_POST['password'];

              if ($user == 'admin' && $pass == "admin123") {
                header("location: dashboard.php");
              } else {
                echo '<div class="alert">
                  <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>
                  Login gagal. Username atau password salah.
                </div>';
              }
            }
          ?>
          <form method="post" action="">       
              <div class="form-group">
                <label for="username" class="form-label"><i class="fa fa-user"></i> Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
              </div>
              <div class="form-group">
                <label for="password" class="form-label"><i class="fa fa-key"></i> Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="login"><i class="fa fa-sign-in"></i> Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
