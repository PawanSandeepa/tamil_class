<?php require_once('external_html.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <title>Tamil class</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="site/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="css/bootstrap.css">

  
</head>

<body>
  <?php navi(); ?>
  <div class="jumbotron">
    <div class="container-fluid py-5 px-5 bg-light">
      <div class="row">
        <div class="col-3 order-1 order-lg-2 my-5">
        </div>
        <div class="col-6 order-1 order-lg-2 my-5">
          <!-- login form -->
          <div class="card card-user my-5">
              <div class="log_con">
                <div class="card-header">
                  <h5 class="log_tit">Log In For Student</h5>
                </div>
                <div class="card-body">
                  <form method="post" action="forgot_password.php">
                    <p class="error"></p>
                    <div class="row">
                      <div class="col-xl-9 col-lg-12 pr-1">
                        <div class="form-group">
                          <label>E-mail</label>
                          <input type="mail" class="form-control" name = "mail" id="mail" placeholder="E-mail">
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-12 pr-1">
                        <div class="form-group">
                          <label></label>
                          <input type="button" class="form-control btn btn-outline-primary" name="sendcode" id="sendcode" value="Send code">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 pr-1 my-3">
                        <div class="form-group">
                          <label>Code</label>
                          <input type="text" class="form-control" name="code" id="code" placeholder="Code">                    
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="update ml-auto mr-4">
                        <button type="button" class="btn btn-primary btn-round" name= "next" onclick="" id="next">Next</button>
                        <a href="login.php"><button type="button" class="btn btn-primary btn-danger" name= "cancel" id="log_button">Cancel</button></a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div><!-- end of login form -->
        </div>
      </div>
    </div>
  </div>

<?php footer(); ?>

<script src="js/bootstrap.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
  function next(){
    // alert("javascript");
  }

  $(document).ready(function(){
    // alert("load");
    $("#next").click(function(){
      alert("next");
      //if code is correct
      window.location.replace("change_password.php");
    });
  });
</script>

</body>

</html>