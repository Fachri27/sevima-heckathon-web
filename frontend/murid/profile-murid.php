<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
  <!-- Include the Materialize CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Include the Materialize JavaScript CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="#" class="brand-logo">Logo</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card">
          <div class="card-content">
            <div class="center">
              <img src="profile-image.jpg" alt="Profile Image" class="circle responsive-img" style="width: 150px;">
              <h4>John Doe</h4>
              <p>Front-end Developer</p>
            </div>
            <ul class="collection with-header">
              <li class="collection-header"><h5>About Me</h5></li>
              <li class="collection-item"><strong>Email:</strong> johndoe@example.com</li>
              <li class="collection-item"><strong>Location:</strong> New York, USA</li>
              <li class="collection-item"><strong>Skills:</strong> HTML, CSS, JavaScript</li>
            </ul>
            <div class="center">
                <button class="btn waves-effect waves-light" type="submit">Edit</button>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Initialize the sidenav
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      var instances = M.Sidenav.init(elems);
    });
  </script>
</body>

</html>
