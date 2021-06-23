<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')
<body>
@include('layouts/client/navbar')
<div class="py-5">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('unsplash/undraw2.png')}}" class="d-block w-100" height="550">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Belajar Bersama</h5>
          <p class="text-dark">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('unsplash/undraw1.png')}}" class="d-block w-100" height="550">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Second slide label</h5>
          <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('unsplash/undraw.png')}}" class="d-block w-100" height="550">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Third slide label</h5>
          <p class="text-dark">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<hr>
  @include('layouts/client/cdnjs') 
</body>
</html>