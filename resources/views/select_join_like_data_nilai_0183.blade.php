<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Pengembangan Teknologi Web</title>
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px #ddd;
        }
        thead {
            background-color: #f2f2f2;
        }
        th, td {
            text-align: center;
            padding: 10px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
    </style>
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: rgb(0, 0, 0)">
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
          <a class="nav-link active" aria-current="page" href="{{url('/dataguru')}}">Data Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/nilai')}}">Data Nilai</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <body>
  <h1 style="text-align:center; padding-top:10px">DATA NILAI</h1>
    <div style="overflow-x: auto">
        <table>
            <thead>
                <tr>
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Nama Siswa</th>
                    <th style="text-align:center">Asal Kota</th>
                    <th style="text-align:center">Kelas</th>
                    <th style="text-align:center">Mata Pelajaran</th>
                    <th style="text-align:center">Nilai</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php $no=1 ?>
                @foreach ($nilai as $n)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $n->nama_siswa }}</td>
                    <td>{{ $n->alamat_siswa }}</td>
                    <td>{{ $n->nama_kelas}}</td>
                    <td>{{ $n->nama_pelajaran}}</td>
                    <td>{{ $n->nilai}}</td>
                </tr>
                @endforeach
            </tbody>
            </tbody>
        </table>    
    </div>
    <div class="d-grid gap-2 gap-2 col-6 mx-auto" style="padding-top:50px; padding-bottom:50px">
        <a href="{{url('/nilai/lulus')}}" class="btn btn-dark">Lihat Data Nilai Lulus Siswa Kota Jakarta</a>
    </div>
  </body>
</html>