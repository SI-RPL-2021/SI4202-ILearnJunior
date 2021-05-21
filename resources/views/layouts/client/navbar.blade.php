<nav class="navbar navbar-expand-lg navbar-light bg-gradient">
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
              <a class="nav-link text-white" href="#">ABOUT</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link text-white" href="/login">LOGIN</a>
            </li>
            <li class="nav-item mr-3">
              <a class="nav-link text-white" href="{{ route('register') }}">REGISTER</a>
            </li>
        @else
      <ul class="navbar-nav ml-auto mr-5 ">
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">FORUM</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">ABOUT</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">CLASS</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">PODCAST</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">GRADE</a>
        </li>
        <li class="nav-item mr-3">
          <a class="nav-link text-white" href="#">PROFILE</a>
        </li>
      </ul>
      @endguest
    </div>
  </nav>