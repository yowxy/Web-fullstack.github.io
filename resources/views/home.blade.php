<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
  <nav class="navbar  navbar-dark navbar-expand-lg bg-primary  ">
    <div class="container flex justify-content-between">
      <a class="navbar-link" href="{{ route('home') }}">
        <img  class="h-32px"  src="{{ url('assets/images/image 1.png')}}" alt="Laracus Logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto m-lg-3">
          <li class="nav-item d-block d-lg-none d-xl-block">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Discussions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-nowrap " href="#">About us</a>
          </li>
        </ul>

        <form class="d-flex w-100 me-4 my-2 my-lg-0 ms-auto" role="search" action="#" method="GET">
            <div class="input-group">
                <span class="input-group-text  bg-white border-end-0" >
                       <img src="{{ url('assets/images/Group 1340.png') }}" alt="">
                </span>
                <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="" >
            </div>
        </form>


        <ul class="navbar-nav ms-auto my-2 my-lg-0" >
            <li class="nav-item my-auto ">
                <a class="nav-link text-nowrap" href="#">Log in</a>
              </li>
            <li class="nav-item ps-1 pe-0 ">
                <a class="btn-primary-white" href="#">Singn Up</a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="container hero" >
    <div class="row align-items-center h-100" >
        <div class="col-12 col-lg-6   ">
            <h1 class="text-bold" >The Laravel</br> comunity Developer </h1>
            <p class="mb-4" >Empowering the laravel comunity to connect,share and learn</p>
            <a href="#" class="btn-primary me-2  mb-2 mb-lg-0    " >Sign Up</a>
            <a href="#" class="  btn-secondary me-2 mb-2 mb-lg-0"  >Join Discussions</a>
        </div>
        <div class="col-12 col-lg-6  h-315  order-first order-lg-last mb-3 mb-lg-0 " >
            <img class="hero-image float-lg-end"  src="{{ url('assets/images/Mask group.png') }}" alt="">
        </div>
    </div>
  </section>
  <section class="container min-h-372px" >
    <div class="row">

        <div class="col-12 col-lg-4  text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/discussions.png') }}" alt="Discussions">
            <h2>Discussions</h2>
            <p class="fs-3" >51.875</p>
        </div>

        <div class="col-12 col-lg-4  text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/answers.png') }}" alt="Discussions">
            <h2>Answers</h2>
            <p class="fs-3" >121.984</p>
        </div>

        <div class="col-12 col-lg-4  text-center">
            <img class="promote-icon mb-2" src="{{ url('assets/images/users.png') }}" alt="Discussions">
            <h2>Users</h2>
            <p class="fs-3" >11.675</p>
        </div>
    </div>
  </section>
  <section class="bg-gray" >
    <div class="container  py-80px">
        <h2 class="text-center" >Help Others</h2>
        <div class="row">
            <div class="col-12 col-g-4 mb-3 ">

            </div>
        </div>
    </div>
  </section>


  <script
  src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>
</html>
