<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')
<body>
  <div id="app">
    <div class="main-wrapper">
@include('layouts/client/navbar')
      <!-- Main Content -->
    <div class="row">
          {{-- ISI DENGAN KONTEN --}}
          @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
@include('layouts/client/cdnjs') 
</body>
</html>
