<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page</title>
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

    <ul class="sidenav" id="mobile-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <div class="container">
        <div class="row">
        <div class="col s12 m6">
            <h2>Welcome to Our Website</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam fringilla efficitur diam vel aliquet.
            Pellentesque rutrum facilisis purus, eu tincidunt nulla ultricies at. Donec gravida ultrices rutrum.
            Pellentesque eget consequat mauris, a facilisis felis. Donec id felis vestibulum, hendrerit lectus a,
            aliquam ligula.</p>
        </div>
        <div class="col s12 m6">
            <img src="image.jpg" alt="Image" class="responsive-img">
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
