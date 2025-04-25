<!doctype html>
<html lang="en">
    <head>
        <title>Login - Hospital Management</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container w-50 my-5">
            <h1 class="text-center">Login Form</h1>
            <?php
            if(isset($_GET['msg'])){
                echo "<p class='text-center text-danger'>".$_GET['msg']."</p>";
            }
            ?>
            <form action="./login_data.php" method="POST">
                <div class="my-3">
                    <input required type="email" name="email" placeholder="Email" class="form-control">
                </div>
                <div class="my-3">
                    <input required type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="my-3">
                    <button name="login" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
