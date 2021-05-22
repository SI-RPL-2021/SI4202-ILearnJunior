<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')
<body>
  @include('layouts/client/navbar')
  <div class="py-5"></div>
      @yield('content')

@include('layouts/client/cdnjs') 
</body>
</html>
