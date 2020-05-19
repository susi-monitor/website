<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SuSi Monitor - easy to set-up, powerful web service response monitor</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">


    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-config" content="img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="img/android-chrome-192x192.png" height="45px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item">
                  <a class="nav-link" href="features.php">Features</a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/susi-monitor/docs" target="_blank">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="download.php">Download</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/susi-monitor/susi-monitor" target="_blank">Github</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>

</header>

<!-- Page Content -->
<div class="container">

    <h1 class="my-4">Download SuSi Monitor</h1>

    <!-- Portfolio Section -->

    <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item">
            <div class="card h-100">
<!--                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="download_bundle.php">Download self-deploy bundle</a>
                    </h4>
                    <p class="card-text">Choose this one when you have got an Apache/NGINX server set up and you want to
                        do the installation and configuration yourself.<br> This option is most flexible - upload the
                        bundle to your server and set up to the way you like.<br><br>
                    </p>
                    <a class="btn btn-primary" href="download_bundle.php">Download bundle</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6 portfolio-item">
            <div class="card h-100">
<!--                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="https://hub.docker.com/r/susimonitor/susi-monitor" target="_blank">Use Docker</a>
                    </h4>
                    <p class="card-text">Choosing docker you will deploy a docker container with everything that SuSi
                        needs already inside. <br>If you need to customize you can do that via run-time
                        parametrs.<br><br>
                    </p>
                    <a href="https://hub.docker.com/r/susimonitor/susi-monitor" class="btn btn-primary" target="_blank">Get docker image</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->


</div>
<!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;<?php echo date('Y'); ?> SuSi Monitor</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
