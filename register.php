<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link https="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" rel="stylesheet">    
</head>

<body>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Create Your Account</p>

                                    <?php
                                    if (isset($_POST["submit"])) {
                                        $name=$_POST["name"];
                                        $email=$_POST["email"];
                                        $password=$_POST["password"];
                                        $confirm_password=$_POST["confirm_password"];
                                        $errors=array();
                                        
                                       

                                        if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
                                            array_push($errors,"All fields are requeired! ");
                                        }
                                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                            array_push($errors,"Email is not validate! ");
                                        }
                                        if (strlen($password)<8) {
                                            array_push($errors,"Password must be 8 characters long! ");
                                        }
                                        if ($password!==$confirm_password) {
                                            array_push($errors,"Password does not match! ");
                                        }
                                        if (count($errors)>0) {
                                            foreach ($errors as $error) {
                                                 echo "<div class='text-danger'> $error</div>";
                                            }
                                        }else{
                                            require_once "database.php";
                                        }
                                        
                                    }
                                    
                                    ?>
                                    <form class="mx-1 mx-md-4" action="register.php" method="post">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 "></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="name">Your Name</label>
                                                <input type="text" id="name" class="form-control" name="name" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="email">Your Email</label>
                                                <input type="email" id="email" class="form-control" name="email" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" class="form-control"
                                                    name="password" />

                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <label class="form-label" for="confirm_password">Repeat your
                                                    password</label>
                                                <input type="password" id="confirm_password" class="form-control"
                                                    name="confirm_password" />

                                            </div>
                                        </div>
                                        

                                        <div class="form-check d-flex justify-content-center mb-5">

                                            <label class="form-check-label" for="form2Example3">
                                                Already have an account? <a href="#!">Login here</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg" value="register"
                                                name="submit">Register</button>
                                        </div>

                                    </form>
                                    <div class="">
                                            <?php 
                                                // if (count($errors)>0) {
                                                //     foreach ($errors as $error) {
                                                //          echo "<div class='text-danger'> $error</div>";
                                                //     }
                                                // }
                                             ?>
                                        </div>

                                </div>


                                <div class="col-md-10 col-lg-6 col-xl-5 d-flex align-items-center order-1 order-lg-1">

                                    <img src="https://static.vecteezy.com/system/resources/previews/021/179/564/non_2x/document-icon-with-checkmark-and-pen-clipboard-icon-with-document-paper-free-png.png"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>