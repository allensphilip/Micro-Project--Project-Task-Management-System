<!-- <?php
require 'dbcon.php';
// if(!isset($_SESSION['uname'])){
//     header('Location: index.php');
// }
?> -->
<html>

    <head>
        <title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
             <h1> <?php $_SESSION['email']?>'s Home</h1>
        </title>
    </head>

    <body>
        <div class="m-5 p-2">
            <nav class="navbar bg-light">
                <div class="container-fluid">
                    <!-- <a class="navbar-brand" href="#">
                        <img src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                        Work Flow   
                    </a> -->
                </div>
            </nav>
        </div>
        


        <a href="logout.php"><Button>Logout</Button></a>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>