<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Include the Materialize CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Include the Materialize JavaScript CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
  <div class="container" style="margin-top: 150px;">
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Registrasi</span>
            <form id="login-form" method="post" action="action-regis.php" enctype="multipart/form-data">
              <div class="input-field">
                <label for="nisn">NISN</label>
                <input type="text" id="nisn" name="nisn">
              </div>
              <div class="input-field">
                <label for="username">Username</label>
                <input type="text" id="username" name="nama" >
              </div>
              <div class="input-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" >
              </div>
              <div class="input-field">
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" >
              </div>
              <div class="input-field">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto">
              </div>
              <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Daftar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Initialize the form validation
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems);
    });
  </script>
</body>

</html>
