<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Document</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <?= link_tag('assets/css/bootstrap.min.css'); ?>
  <!-- Material Design Bootstrap -->
  <?= link_tag('/assets/css/mdb.min.css'); ?>
  <!-- Your custom styles (optional) -->
  <?= link_tag('assets/css/style.css'); ?>

</head>
<style>
  body,
  html {
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
  }

  #container {
    position: relative;
    width: 50%
  }

  #cont {
    position: relative;

  }

  #product-svg {
    position: relative;
    z-index: 2;
    mix-blend-mode: multiply;
  }

  #product-shape {
    fill: #DBED64;
  }

  #background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: auto;
  }

  #test {
    color: #aaa;
  }

  .colors {
    display: flex;
    position: fixed;
    bottom: 2em;
    right: 2em;
  }

  .color {
    height: 36px;
    width: 36px;
    margin-left: 0.5em;
    border-radius: 18px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
    border: 2px solid #aaa;
    cursor: pointer;
  }
</style>

<body>
  <!--Main Navigation-->
  <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark blue-gradient scrolling-navbar">
      <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nav 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nav 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nav 3</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link"><i class="fab fa-twitter"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link"><i class="fab fa-instagram"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>

  </header>
  <!--Main Navigation-->
  <main>
    <div class="container">
      <div class="row mt-5 pt-5">
        <div class="col">
          <div class="form-row mb-5">
            <div class="col">
              <select class="custom-select custom-select-sm">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
              <select class="custom-select custom-select-sm">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="col">
              <select class="custom-select custom-select-sm">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <button type="button" class="btn btn-primary btn-sm ml-3">Filter</button>
          </div>
          <div class="card p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Roof Cladding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Wall Cladding</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Requirements Form</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active p-2" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="blue lighten-5 p-2 container">
                  <div class="row d-flex justify-content-center">
                    <div id="container" class="col-md-8">
                      <svg id="product-svg" class="shirt-image" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 256">
                        <defs />
                        <path id="product-shape" d="M2 248L122 4l2-2 3-1h3l3 1 2 2 2 2 2 1h2l3-2 3-2 3-2h2l2 1 1 1 2 2 2 2 2 1h3l2-1 2-3 3-2h4l2 1 2 2 2 2 2 1h3l2-1 2-2 2-2 2-1h2l3 1 2 2 2 2 2 1h3l2-1 2-2 3-2 2-1h3l2 1 2 3 2 1 2 1h3l3-1 2-2 2-2 3-1h2l2 1 1 2 1 1 2 1h4l3-1 2-1 2-2 3-1h3l1 1 2 2 1 1 1 1h7l2-2 2-2 2-1h4l2 2 2 1 2 2h3l2-1 2-1 2-1 2-2 2-1h3l2 1 2 2 2 2 3 1h2l3-2 2-2 1-1 2-1h3l2 1 2 2 2 1 1 1h4l2-2 2-2 3-1h4l2 1 2 2 1 1 2 1h5l2-1 2-2 2-2h5l2 2 2 4 130 239h-2l-2-2-1-1-2-1h-4l-4 1-3 2-3 2-3 2-3 2-2 1h-8l-3-2-3-2-3-4-4-1h-5l-4 2-3 2-3 2-5 2-3 1h-5l-2-1-2-1-3-2-2-2-2-2-3-2h-4l-3 1-3 1-3 2-3 2-3 2-3 1-3 1h-3l-3-2-4-3-4-3-3-2h-8l-4 2-3 2-3 3-3 2-2 1-2 1h-5l-3-1-3-2-6-5-4-1h-6l-2 1-2 1-3 2-3 2-4 2-3 1h-6l-4-1-4-3-5-4-3-1-3-1h-2l-3 1-3 2-3 2-3 3-3 2-3 1h-4l-4-1-3-1-7-6-3-1h-6l-3 2-10 6-3 2h-8l-6-4-7-4-4-1h-5l-5 3-4 3-4 3h-7l-5-1-3-2-4-4-4-2-3-1h-5l-3 2-3 2-6 5-3 1h-9l-4-3-4-4-5-3h-5l-4 1-4 2-4 3-3 2-2 1-3 1h-4l-4-1-3-2-3-3-4-3-3-1h-9l-4 2-8 6-3 1h-5l-4-2-5-3-5-4-4-1h-6l-3 1-3 2-1 2-1-1z" />
                      </svg>
                      <img id="background-image" src="assets/img/" alt="">
                      <!-- https://lh3.googleusercontent.com/proxy/fJpGyXkG8YiSM698EactWO1geewmv6YIO7uE2_Crdu8ZuWSMcd2pk5o234KlKnTCxVQuphOQDsxvHzjMlyCph525-ls2OqltuMhN -->
                    </div>
                    <div class="col-md-4">
                      <h4><b>Details:</b></h4>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </div>

                  </div>

                  <div class="colors">
                    <div class="color" style="background-color: #e1e851" data-hex="#e1e851"></div>
                    <div class="color" style="background-color: #8cd147" data-hex="#8cd147"></div>
                    <div class="color" style="background-color: #4a9ccf" data-hex="#4a9ccf"></div>
                    <div class="color" style="background-color: #aaa" data-hex="#aaa"></div>
                    <div class="color" style="background-color: #f29674" data-hex="#f29674"></div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade p-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="blue lighten-5 p-2">
                  <div>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="button" href="<?= base_url('pdfs/save_pdf') ?>" class="btn btn-danger btn-sm ml-3 mt-2 align-middle">Print</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade p-2" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="blue lighten-5 p-2">
                  <div id="container">
                    <svg id="product-svg" class="shirt-image" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 256">
                      <defs />
                      <path id="product-shape" d="M2 248L122 4l2-2 3-1h3l3 1 2 2 2 2 2 1h2l3-2 3-2 3-2h2l2 1 1 1 2 2 2 2 2 1h3l2-1 2-3 3-2h4l2 1 2 2 2 2 2 1h3l2-1 2-2 2-2 2-1h2l3 1 2 2 2 2 2 1h3l2-1 2-2 3-2 2-1h3l2 1 2 3 2 1 2 1h3l3-1 2-2 2-2 3-1h2l2 1 1 2 1 1 2 1h4l3-1 2-1 2-2 3-1h3l1 1 2 2 1 1 1 1h7l2-2 2-2 2-1h4l2 2 2 1 2 2h3l2-1 2-1 2-1 2-2 2-1h3l2 1 2 2 2 2 3 1h2l3-2 2-2 1-1 2-1h3l2 1 2 2 2 1 1 1h4l2-2 2-2 3-1h4l2 1 2 2 1 1 2 1h5l2-1 2-2 2-2h5l2 2 2 4 130 239h-2l-2-2-1-1-2-1h-4l-4 1-3 2-3 2-3 2-3 2-2 1h-8l-3-2-3-2-3-4-4-1h-5l-4 2-3 2-3 2-5 2-3 1h-5l-2-1-2-1-3-2-2-2-2-2-3-2h-4l-3 1-3 1-3 2-3 2-3 2-3 1-3 1h-3l-3-2-4-3-4-3-3-2h-8l-4 2-3 2-3 3-3 2-2 1-2 1h-5l-3-1-3-2-6-5-4-1h-6l-2 1-2 1-3 2-3 2-4 2-3 1h-6l-4-1-4-3-5-4-3-1-3-1h-2l-3 1-3 2-3 2-3 3-3 2-3 1h-4l-4-1-3-1-7-6-3-1h-6l-3 2-10 6-3 2h-8l-6-4-7-4-4-1h-5l-5 3-4 3-4 3h-7l-5-1-3-2-4-4-4-2-3-1h-5l-3 2-3 2-6 5-3 1h-9l-4-3-4-4-5-3h-5l-4 1-4 2-4 3-3 2-2 1-3 1h-4l-4-1-3-2-3-3-4-3-3-1h-9l-4 2-8 6-3 1h-5l-4-2-5-3-5-4-4-1h-6l-3 1-3 2-1 2-1-1z" />
                    </svg>
                    <img id="background-image" src="" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--Main Layout-->
  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>
  <script>
    // Reference the color shape that was drawn over the image
    const overlay = document.getElementById("product-shape");

    // Click on a color

    var el = document.getElementsByClassName("color");
    for (var i = 0; i < el.length; i++) {
      el[i].onclick = changeColor;
    }

    function changeColor(e) {
      // get the hex color
      let hex = e.target.getAttribute("data-hex");
      // set the hex color
      overlay.style.fill = hex;
    }
  </script>
</body>

</html>