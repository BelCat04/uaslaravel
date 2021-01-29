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
                        <a class="nav-link active" aria-current="page" style="color: #000000; font-weight: 700;" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="/fasilitasumum">Jasa & Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="#">Koleksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #000000; font-weight: 700;" href="/login">Login</a>
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
  @foreach($fasilitasumum as $fasu)
    <tr>
    <?php $no++; ?>
      <td>{{$no}}</td>
      <td>{{ $fasu->nama }}</td>
      <td>{{ $fasu->jumlah }}</td>
      <td>{{ $fasu->posisi }}</td>
      <td>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
{{ $fasilitasumum->links() }}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>

</html>