<?php
$pageTitle = "Register Page";
//header
include 'includes/header.php';

//navbar
include 'includes/navbar.php';
?>


    <!-- Registration form -->
    <div class="row" mt-5>
        <div class="col-6 offset-md-3">

            <div class="alert alert-success my-2" role="alert">
                Login Success
            </div>

            <div class="alert alert-danger my-2" role="alert">
                Invalid Credentials
            </div>

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>






    <?php
//footer
include 'includes/footer.php';
?>