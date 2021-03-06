<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KO Photography</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
        <img class="logo" src="img/KOP.png" alt="Logo">
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.php"><img class="navLogo" src="img/KOPwhite.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="products.php">Portfolio</a>
            </li>
            <li class="nav-item active px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="about.php">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section about-heading">
      <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/newBanner.png" alt="">
        <div class="about-heading-content">
          <div class="row">
            <div class="col-xl-9 col-lg-10 mx-auto">
              <div class="bg-faded rounded p-5">
                <h2 class="section-heading mb-4">
                  <span class="section-heading-upper">Interested in Working with Me?</span>
                  <span class="section-heading-lower">Message Me</span>
                </h2>
                  <div>
                    <input name="name" type="text" placeholder="Full Name" class="field hide" id="name">
                  </div>
                  <div>
                    <input name="email" type="text" placeholder="Email" class="field hide" id="email">
                  </div>
                  <div>
                    <input name="phone" type="text" placeholder="Phone" class="field hide" id="phone">
                  </div>
                  <div>
                    <textarea name="comments" type="text" placeholder="Comments" class="field hide" id="comments"
                    ></textarea>
                  </div>
                  <div class="intro-button mx-auto">
                      <input name="submit" type="submit" class="btn btn-primary btn-xl send hide" value="Send" />
                  </div>
                  <div class="email-success">
                    Thank you, I will get in contact with you ASAP!
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
          <p class="m-0 small">&copy; Developed by <a class="footer-link" href="https://johnnyd4.github.io/portfolio/JohnDavis/">John Davis</a> 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.email-success').hide();
        $('.send').click(() => {
          const name = $('#name').val();
          const email = $('#email').val();
          const phone = $('#phone').val();
          const comments = $('#comments').val();
          
          $.post('mail.php',
            {
              name,
              email,
              phone,
              comments,
              sent: 'sent',
            },
            (data, status) => {
              if (status === 'success') {
                $('.hide').hide();
                $('.email-success').show();
              }
            });
        });
      });
    </script>
  </body>

</html>
