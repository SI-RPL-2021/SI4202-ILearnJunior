<!DOCTYPE html>
<html lang="en">
@include('layouts/client/header')

<body>
  @include('layouts/client/navbar')

  <div class="container py-3">
    <div class="row">
        <div class="table-responsive">
            <br>
            <br>
            <br>
            <table class="table align-items-center table-hover" id="table">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                             @foreach ($inputnilai as $inputnilai)
                        <td>
                            {{$index++}}
                        </td>
                        <td>
                            {{$inputnilai->nama_siswa}}
                        </td>
                        <td>
                            {{$inputnilai->kelas}}
                        </td>
                        <td>{{$inputnilai->mapel}}</td>
                        <td>{{$inputnilai->nilai}}</td>
                        <td>{{$inputnilai->keterangan}}</td>
                        <td>
                            <img src="{{asset('bukti/'. $inputnilai->bukti)}}" width="100" alt="">
                        </td>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
  </div>

  @include('layouts/client/cdnjs')
</body>

</html>
