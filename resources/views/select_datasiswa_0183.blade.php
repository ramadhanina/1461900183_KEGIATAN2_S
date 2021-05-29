<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pengembangan Teknologi Web</title>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(19, 100, 0)">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TUGAS KEGIATAN 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/datasiswa')}}">Data Siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/dataguru')}}">Data Guru</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <body>
    <div>
        <table>
            <thead>
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">NIS</th>
                    <th style="text-align:center">Nama Siswa</th>
                    <th style="text-align:center">Jenis Kelamin</th>
                    <th style="text-align:center">Alamat</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php $id=1 ?>
                @foreach ($datasiswa as $siswa)
                <tr>
                    <td>{{ $id++ }}</td>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama_siswa }}</td>
                    <td>{{ $siswa->kelamin}}</td>
                    <td>{{ $siswa->alamat_siswa}}</td>
                </tr>

                @endforeach
            </tbody>
            </tbody>
        </table>    
    </div>
  </body>
</html>