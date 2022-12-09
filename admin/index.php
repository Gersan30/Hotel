<?php
session_start();
if (isset($_SESSION["user"])) {
  header("location:home.php");
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>HOTEL HACIENDA</title>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">


</head>

<body>
  <div class="container">
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
      <div class="card card0 border-0">
        <div class="row d-flex">
          <div class="col-lg-6">
            <div class="card1 pb-5">
              <div class="row">
                <img src="../admin/assets/img/Login/logo.png" class="logo">
              </div>
              <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                <img src="../admin/assets/img/Login/5.jpg" class="image">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card2 card border-0 px-4 py-5">
              <div class="row mb-4 px-3">
                <h6 class="mb-0 mr-4 mt-2">Iniciar Sesion</h6>
              </div>
              <form method="post">
            </div>
            <div class="row px-3">
              <label class="mb-4">
                <h6 class="mb-1 text-sm">Usuario</h6>
              </label>
              <input class="mb-4" type="text" name="user" value="Username"
                onBlur="if(this.value == '') this.value = 'Username'"
                onFocus="if(this.value == 'Username') this.value = ''" required>
            </div>
            <div class="row px-3">
              <label class="mb-1">
                <h6 class="mb-0 text-sm">Contraseña</h6>
              </label>
              <input type="password" name="pass" value="Password" onBlur="if(this.value == '') this.value = 'Password'"
                onFocus="if(this.value == 'Password') this.value = ''" required>
            </div>
            <div class="row px-3 mb-4">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                <label for="chk1" class="custom-control-label text-sm">Recuerdame</label>
              </div>
              <a href="#" class="ml-auto mb-0 text-sm">¿Has olvidado tu Contraseña?</a>
            </div>
            <div class="row mb-3 px-3">
              <button type="submit" class="btn btn-blue text-center">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>>
</body>

</html>
<?php
include('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 

  $myusername = mysqli_real_escape_string($con, $_POST['user']);
  $mypassword = mysqli_real_escape_string($con, $_POST['pass']);

  $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $active = $row['active'];

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row

  if ($count == 1) {

    $_SESSION['user'] = $myusername;

    header("location: home.php");
  } else {
    echo '<script>alert("Your Login Name or Password is invalid") </script>';
  }
}
?>