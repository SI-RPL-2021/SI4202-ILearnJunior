<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">I Learn Junior</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">LJ</a>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/admin">Lihat Dashboard</a></li>
        </ul>
      </li>
      <li class="menu-header">Fiture</li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Management Kelas</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('tambah_kelas')}}">Tambah Kelas</a></li>
          <li><a class="nav-link beep beep-sidebar" href="/index_kelas">Lihat Kelas</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Management Blog</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('tambah_blog')}}">Buat Postingan</a></li>
          <li><a class="nav-link" href="{{route('listblog')}}">Daftar Postingan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-microphone"></i> <span>Management Podcast</span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('addpodcast')}}">Tambahkan Podcast</a></li>
          <li><a href="{{route('podcast')}}">List Podcast</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Management Materi Pelajaran</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('tambah_materi')}}">Buat Materi Baru</a></li>
          <li><a class="nav-link" href="/listmateri">Daftar Materi</a></li>
          <li><a class="nav-link" href="{{route('addvideo')}}">Post Materi Video</a></li>
          <li><a class="nav-link" href="/video">List Materi Video</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Management User</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('listuser')}}">User Terdaftar</a></li>
          <li><a class="nav-link" href="{{route('premiumadmin')}}">Pengajuan Premium</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Nilai</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('input_nilai')}}">Input Nilai</a></li>
          <li><a class="nav-link beep beep-sidebar" href="/index">Lihat Nilai</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Pengumpulan Tugas</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('list_tugas')}}">List Pengumpulan</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Feedback</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="/listfeed">List Feedback</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i> <span>Daily Report</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="{{route('DailyIndex')}}">Data Daily Report</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>