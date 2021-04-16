<!DOCTYPE html>
<html lang="en">
@include('layouts/admin/header')
<body>
  <div id="app">
    <div class="main-wrapper">
@include('layouts/admin/navbar')
@include('layouts/admin/sidebar')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Blank Page</h1>
          </div>
          {{-- ISI DENGAN KONTEN --}}
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
@include('layouts/admin/cdnjs') 
</body>
</html>
