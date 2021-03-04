<?php 
  if (session_status() == PHP_SESSION_NONE) {
      session_start();
  } 
?>
<?php require_once('external_html.php'); ?>
<?php

  function getdp(){
    echo 'site/img/avatar.png';
  }

  $dp="";
  $detail_body="this is testing data<br>second row";
  $mail="";
  $fullname="";
  $gender="";
  $address="";
  $phone="";
  $grade="";

?>

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


  <link rel="stylesheet" href="css/bootstrap">

  
</head>

<body>
  <?php navi(); ?>
  <div class="jumbotron">
    <div class="container-fluid py-5 px-5 bg-light">
      <div class="row">
        <div class="col-lg-4 pt-5 pt-lg-0 order-1 order-lg-1 d-flex flex-column my-5">
          <dvi class="card text-center  align-items-center">
            <img src="<?php getdp();?>" alt="profile" class="card-img-top center content-center" style='max-width: 18rem'>
            <dvi class="card-body">
              <?php echo $detail_body; ?>
            </dvi>
            <div class="card-footer">
              <button type="submit" name="change_img" class="btn btn-primary btn-round">Change picture</button>
            </div>
          </dvi>
        </div>
        <div class="col-lg-8 order-2 order-lg-2 hero-img my-5">
          <div class="container">
            <form action="profile.php" method="post">
              <div class="row my-3">
                <div class="col-12 pr-1">
                  <div class="form-group">
                    <label>E-mail</label>
                    <input type="mail" class="form-control" name="mail" id="mail" value="<?php echo $mail; ?>" disabled>
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 col-sm-8 pr-1">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $fullname; ?>">
                  </div>
                </div>
                <div class="col-12 col-sm-4 pr-1">
                  <div class="form-group">
                    <label>Gender</label>
                    <select class="form-control" class="form-control" name="gender" id="gender">
                      <?php
                        if ($gender=='male') {
                          echo '<option value="male" selected="selected">Male</option>';
                          echo '<option value="female">Fe-male</option>';
                        }else{
                          echo '<option value="female" selected="selected">Fe-male</option>';
                          echo '<option value="male">Male</option>';
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-12 pr-1">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $address; ?>">
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="col-8 pr-1">
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" id="phone" value="<?php echo $phone; ?>">
                  </div>
                </div>
                <div class="col-4 pr-1">
                  <div class="form-group">
                    <label>Grade</label>
                    <input type="number" class="form-control" name="grade" id="grade" value="<?php echo $grade; ?>">
                  </div>
                </div>
              </div>
              <div class="row my-3">
                <div class="update ml-auto mr-auto">
                  <button type="submit" name="submit" class="btn btn-primary btn-round">Update</button>
                  <button type="button" name="resetpass" id="resetpass" class="btn btn-primary btn-round">Change Password</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php footer(); ?>

<script src="js/bootstrap"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>