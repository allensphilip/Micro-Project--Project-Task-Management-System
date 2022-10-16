<?php
  require '../dbcon.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container height-100 d-flex justify-content-center align-items-center">
    <div class="position-relative">
        <div class="card p-2 text-center center">
            <h6>Please enter the one time password <br> to verify your account</h6>
            <div> <span>A code has been sent to</span> <small><?php echo $_SESSION['eml']?></small> </div>
            <form action="otpaction.php" method="POST">
              <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> <input class="m-2 text-center form-control rounded" type="text" name="first" id="first" maxlength="1" required /> <input class="m-2 text-center form-control rounded" type="text" name="second" id="second" maxlength="1" required /> <input class="m-2 text-center form-control rounded" type="text" id="third" name="third" maxlength="1" required /> <input class="m-2 text-center form-control rounded" type="text" name="fourth" id="fourth" maxlength="1" required /> <input class="m-2 text-center form-control rounded" type="text" id="fifth" name="fifth" maxlength="1" required /> <input class="m-2 text-center form-control rounded" type="text" id="sixth" name="sixth" maxlength="1" required /> </div>
              <div class="mt-4"> <button  type="submit" id="submit" value="submit" name="submit"class="btn btn-danger px-4 validate" >Validate</button> </div>
            </form>
        </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
