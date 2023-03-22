<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La Kapsula</title>
    <link rel="icon" type="image/png" href="../imgs/mainlogo.png" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@300&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body style="font-family: 'Jost', sans-serif;">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="card bg-kuality">
                <div class="d-flex justify-content-around p-4">
                    <img src="../imgs/mainlogo.png" alt="" height="60rem" width="60rem">
                    <img src="../../imgs/mainlogo2.png" alt="La Kapsula" height="50%" width="50%">
                    <img src="../imgs/cavila.png" alt="" height="60rem" width="100rem">
                </div>
                <div class="card-body">
                    <form name="login" id="login">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="User" name="user" id="user">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-key"></span>
                                </div>
                            </div>
                        </div>
                        <div>
                    </form>
                </div>
                <div class="text-center">
                    <button class="btn btn-kuality" onclick="Login()">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
    </div>

  <?php include_once(DIR_VIEWS."footer.php"); ?>

    <script src="../../js/login.js"></script>
    <script src="../../js/sweetalert2.all.min.js"></script>
