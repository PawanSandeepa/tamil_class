<?php
  function navi(){
    echo '<nav class="navbar navbar-dark fixed-top navbar-expand-sm bg-dark">
      <a href="#" class="navbar-brand mx-3">Our Tamil Class</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav1"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse justify-content-center" id="nav1">
        <ul class="navbar-nav mx-3">
          <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Abot</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Feedback</a></li>
        </ul>
      </div>
    </nav>';
  }

  function footer(){
    echo '
      <footer id="footer">
        <div class="container-flid bg-secondary">
          <div class="row d-flex">
            <div class="col-lg-3 ml-3 text-center">
              <img src="site/img/avigon_logo.png" alt="avigon" style="width: 100px;">
            </div>
            <div class="col-lg-4 text-lg-left mt-4 text-center">
              <div class="copyright" style="color:white">
                &copy; Copyright <strong>Avigon</strong>. All Rights Reserved
              </div>
              <div class="credits" style="color:white">
                Designed by <a href="https://avigon.com/">Avigon</a>
              </div>
            </div>
            <div class="col-lg-5 my-4">
              <nav class="footer-links text-lg-right text-center">
                <a href="#" class="fa fa-facebook btn btn-lg btn-outline-primary"></a>
                <a href="#" class="fa fa-twitter btn btn-lg btn-outline-info"></a>
                <a href="#" class="fa fa-google btn btn-lg btn-outline-danger"></a>
                <a href="#" class="fa fa-linkedin btn btn-lg btn-outline-primary"></a>
                <a href="#" class="fa fa-youtube btn btn-lg btn-outline-danger"></a>
                <a href="#" class="fa fa-instagram btn btn-lg btn-outline-danger"></a>
              </nav>
            </div>
          </div>
        </div>
      </footer>';
  }

?>