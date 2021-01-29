<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMNoobGuy</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container-xl">
        <header>
            <div class="logo-kananatas">
                <div class="logo">
                    <img src="./img/logoatas.jpg" alt="">
                </div>
                <div class="kananatas">
                    <ul>
                        <li>Jumat, 20 November 2020</li>
                        <li><a href="">Indonesia</a> <a href="">English</a></li>
                        <li><input type="text1" placeholder="Search"></li>
                    </ul>
                </div>
            </div>
            <div class="navbar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" style="color: #000000; font-weight: 700;" href="/index-admin">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="/admin-fasilitas">Jasa & Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="#">Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </header>

        <h3>Fasilitas</h3>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Fasilitas</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Posisi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php $no=0; ?>
  @foreach($datafasilitas as $fasilitas)
    <tr>
    <?php $no++; ?>
      <td>{{$no}}</td>
      <td>{{ $fasilitas->nama }}</td>
      <td>{{ $fasilitas->jumlah }}</td>
      <td>{{ $fasilitas->posisi }}</td>
      <td>
      <a href="#">
      <button class="btn btn-warning">Edit</button></a>
      <a href="/hapusfasilitas/{{$fasilitas->id}}">
      <button class="btn btn-danger">Hapus</button></a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{ $datafasilitas->links() }}
<div class="row">
            <div class="col-lg-4">
            <form action="fasilitas/tambahfasilitas" method='POST'>
            {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="nama" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Nama">
                    <input type="text" name="jumlah" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Jumlah">
                    <input type="text" name="posisi" class="form-control mb-2" id="exampleFormControlInput1" placeholder="Posisi">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
            </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>

</html>