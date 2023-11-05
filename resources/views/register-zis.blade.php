<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register ZIS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/register-zis.css') }}">

  </head>
  <body class="">
    
    <!-- container -->
    <div class="container p-0 m-0" id="register">
        <div class="row">
            <div class="col-lg-5 col-12 p-5 text-center d-flex" id="signin_page">
              <div class="col m-auto">
                <p class="fs-1 fw-bold text-light">Hello, Friend!</p>
                <p class="fs-6 text-light">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                <div class="signup">
                  <a href="{{route ('register-zis')}}"><button class="btn btn-outline-light rounded-pill ps-4 pe-4" id="signin">Sign In</button></a>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-12 p-5 text-center d-flex flex-column justify-content-center align-items-center" id="signup_page">
                <p class="fs-2 fw-bold" id="judul">Sign Up to Zakatii</p>
                <i class="fa-brands fa-google fa-xl" style="color: #000000;"></i>
                <p class="fs-6 fw-normal mt-3">or use your email account :</p>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-user fa-lg" style="color: #000000;"></i></span>
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-envelope fa-lg" style="color: #000000;"></i></span>
                  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock fa-lg" style="color: #000000;"></i></span>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <a href="#" class="fs-6 text-decoration-underline link-dark">Forgot your password</a>
                <div class="signup mt-2">
                  <a href="{{route ('index')}}"><button class="btn btn-success text-light rounded-pill ps-4 pe-4" id="signup">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>