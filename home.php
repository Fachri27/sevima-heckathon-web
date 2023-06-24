<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Landing Page</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="navbar-logo">Logo</div>
        <ul class="navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        <div class="navbar-toggle">
        <span class="toggle-icon"></span>
        </div>
    </nav>

  <div class="jumbotron">
    <div class="overlay"></div>
    <h1>Welcome to Our Website</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum. Donec eget urna leo.</p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
      <div class="col">
      <div class="card-container">
    <div class="card">
      <img src="image.jpg" alt="Card Image" class="card-image">
      <div class="card-content">
        <h2 class="card-title">Card Title</h2>
        <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed blandit ipsum.
          Donec eget urna leo.</p>
        <a href="#" class="card-link">Learn More</a>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </div>

  <script>
    // JavaScript to adjust jumbotron height based on viewport height
    function adjustJumbotronHeight() {
      var jumbotron = document.querySelector('.jumbotron');
      var viewportHeight = window.innerHeight;
      jumbotron.style.height = viewportHeight + 'px';
    }

    // Call the function on page load and resize
    window.addEventListener('load', adjustJumbotronHeight);
    window.addEventListener('resize', adjustJumbotronHeight);

    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbar = document.querySelector('.navbar');

    navbarToggle.addEventListener('click', function () {
    navbar.classList.toggle('active');
    navbarToggle.classList.toggle('active');
    });

    // Add an event listener to the card-link element
    const cardLink = document.querySelector('.card-link');

    cardLink.addEventListener('click', function (event) {
    event.preventDefault();
    console.log('Card link clicked!');
    });
  </script>

</body>
</html>
