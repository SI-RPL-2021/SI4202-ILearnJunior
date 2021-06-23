<nav class="navbar navbar-expand-lg navbar-light bg-gradient fixed-top">
    <a href="/">
        <img src="https://i.ibb.co/HBdgfxn/logo-i-learn-junior.png" alt="logo-iLearn" width="55" class="ml-4">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        @guest
            <ul class="navbar-nav ml-auto mr-5 ">
            <li class="nav-item mr-3">
                <a class="nav-link text-white" href="{{route('feedback')}}">FEEDBACK</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link text-white" href="#">ABOUT</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link text-white" href="{{route('login')}}">LOGIN</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link text-white" href="{{route('register')}}">REGISTER</a>
            </li>
        @else
      <ul class="navbar-nav ml-auto mr-5 ">
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="{{route('feedback')}}">FEEDBACK</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="{{route('indexforum')}}">FORUM</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">ABOUT</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="{{route('clientkelas')}}">CLASS</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="/TampilanNilai">GRADE</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="{{route('tugas')}}">TUGAS</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="{{route('createreport')}}">REPORT</a>
        </li>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1" width="20" height="20">
            <div class="d-sm-none d-lg-inline-block text-white">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </ul>
      @endguest
    </div>
  </nav>