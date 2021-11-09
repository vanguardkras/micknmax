<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>Test:1</title>

    <style>

        /* Hide scrollbar */
        ::-webkit-scrollbar {
            display: none;  /* Chrome, Safari and Opera */
            -ms-overflow-style: none;  /* IE and Edge */
        }

    </style>
</head>
<body>
<div class="container-fluid p-0">
    <div class="d-flex flex-column min-vh-100">

        <!--Navbar-->
        <nav class="navbar bg-dark">

            <!--Logo-->
            <div class="container">
                <h1 class="text-primary p-3">
                    Archer<span class="text-warning">Tech</span>
                </h1>
            </div>
        </nav>

        @yield('content')

        <!--Footer-->
        <footer class="mt-auto">
            <div class="d-flex bg-dark p-5 mt-5 text-primary justify-content-center">
                <div>
                    <a class="text-warning" href="#">Page</a> created with <a class="text-warning" href="https://visualstudio.microsoft.com/" target="_blank">Visual studio</a>
                </div>
            </div>
        </footer>
    </div>
</div>

<!-- Bootstrap stuff -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>
</body>
</html>
