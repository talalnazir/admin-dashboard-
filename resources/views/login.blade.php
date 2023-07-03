<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  .gradient-custom {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
  }



  .text-white {
    color: #212529 !important;
  }

  .bg-dark {
    background-color: #fff!important;
  }

  .text-white-50 {
    color: #212529 !important;
  }

  .btn-outline-light:hover {
    color: #0a58ca;
    border-color: #0a58ca;
  }

  .btn-outline-light {
    color: #000;
    border-color: #000;
  }

  .p-5 {
    padding: 1rem!important;
  }

  .pb-5 {
    padding-bottom: 0rem!important;
  }

  @media (min-width: 768px)
  .mb-md-5 {
      margin-bottom: 0rem!important;
  }

@media (min-width: 768px)
  .mt-md-4 {
      margin-top: 0rem!important;
  }
  body {
  background-image: url("{{asset('backend/assets/images/background_img.png')}}");
}

</style>
<body>
<section class="vh-100 gradient-custom"  style="background-image: url("{{asset('backend/assets/images/background_img.png')}}") >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
              @if(Session::has('user'))
              <div class="alert alert-danger">
                <button class="close"> </button>
                <strong>{{Session('user')}} </strong>
              </div>
              @endif

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <form method="post" action="{{url('/')}}">
                @csrf
                <div class="form-outline form-white mb-4">
                  <input type="email" id="typeEmailX" name="email" placeholder="username" class="form-control form-control-lg" />
                  <!-- <label class="form-label" for="typeEmailX">Email</label> -->
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="typePasswordX" placeholder="password" name="password" class="form-control form-control-lg" />
                  <!-- <label class="form-label" for="typePasswordX">Password</label> -->
                </div>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>

                </div>

                <div>
              </form>
              <p class="mb-0">Don't have an account? <a href="/register" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>