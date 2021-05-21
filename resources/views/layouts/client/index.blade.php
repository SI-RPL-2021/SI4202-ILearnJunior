<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')
<body>
  @include('layouts/client/navbar')
  <div class="container">  
    <div class="row">
      @yield('content')
    </div>
  </div>
@include('layouts/client/cdnjs') 
</body>
</html>
