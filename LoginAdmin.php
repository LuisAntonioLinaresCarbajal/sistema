<?php
session_start();
require_once('config.php');
//sirve para comprobar si existe el correo y password de una persona
if (isset($_POST['submit'])) {
    if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = "select * from admin where email = :email ";
            $handle = $pdo->prepare($sql);
            $params = ['email' => $email];
            $handle->execute($params); //mostrar los datos 
            if ($handle->rowCount() > 0) {//verificar por celda en la BD
                $getRow = $handle->fetch(PDO::FETCH_ASSOC); 
                if (password_verify($password, $getRow['password'])) { //validacion del password
                    unset($getRow['password']);
                    $_SESSION = $getRow;
                    header('location:dashboardadmin.php'); //cuando valide el usuario nos redireccionara al dashboard
                    exit();
                } else {
                    $errors[] = "Error en  Email o Password";
                }
            } else {
                $errors[] = "Error Email o Password";
            }
        } else {
            $errors[] = "Email no valido";
        }
    } else {
        $errors[] = "Email y Password son requeridos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--icono de la pagina-->
    <link rel="shortcut icon" href="img/logoAlfonsoMArina.jpg" type="image/x-icon">    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Admin- Alfonso Marina</title>
    <link href="css/stylesAdmin.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fruktur&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login Admin.</h3>
                                </div>
                                <div class="card-body">
                                    
                                    <?php //control de errores
                                    if (isset($errors) && count($errors) > 0) {
                                        foreach ($errors as $error_msg) {
                                            echo '<div class="alert alert-danger">' . $error_msg . '</div>';
                                        }
                                    }
                                    ?>

                                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Direccion email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Contrase??a</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                <div class="small"><a href="registerAdmin.php">Registrese!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; M??xico Cultural 2021</div>
                        <div>
                            <a href="index.php">Regresar</a>
                            &middot;
                            <a href="#">Only Admin.</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>