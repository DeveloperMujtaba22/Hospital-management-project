<!doctype html>
<html lang="en">

<head>
    <title>Hospital Management - Registerion form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container w-50 my-5">
        <h1 class="text-center">Registeration Form</h1>
        <form action="./register_data.php" method="POST" enctype="multipart/form-data">
            <div class="my-4">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="my-4">
                <input type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="my-4">
                <input type="tel" name="phone" placeholder="Phone" class="form-control">
            </div>
            <div class="my-4">
                <input type="date" name="dob" placeholder="Date Of Birth" class="form-control">
            </div>
            <div class="my-4">
                <label for="" class="my-2">Image</label>
                <input type="file" name="file" class="form-control">
            </div>
            <div class="my-4">
                <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <div class="my-4">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>