<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMNoobGuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <style>

   /* body {
        background: url('');
    }
    */
    .login {
        margin-top: 170px;
    }

    .login h3 {
        border-bottom: 1px solid black;
        padding-bottom: 10px;
    }

    </style>


<body>
<div class="login">
<div class="container mt-5">

        <div class="row justify-content-center">
          <div class="col-lg-5 text-center">
            <h3>Login</h3>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-5 mt-3">
          <form action="/login/auth" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <input type="nama" class="form-control mb-4" id="exampleFormControlInput1" name="username" placeholder="Email">
                <input type="password" class="form-control mb-4" id="exampleFormControlInput1" name="password" placeholder="Password">
            <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
</body>

</html>