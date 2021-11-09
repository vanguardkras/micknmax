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
    <title>Add a question</title>

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
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <!--Logo-->
            <div class="container">
                <h1 class="text-primary p-3">
                    Archer<span class="text-warning">Tech</span>
                </h1>

                <!--Small screen nav menu button-->
                <button class="navbar-toggler" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Nav menu items-->
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/tests" class="nav-link text-primary"><u>Tests</u></a>
                        </li>
                        <li class="nav-item">
                            <a href="/results" class="nav-link text-primary"><u>Results</u></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!--Footer-->
        <footer class="mt-auto bg-dark text-warning">
            <div class="d-flex p-5 justify-content-center">
                <div>
                    <a href="#">Page</a> created with <a href="https://visualstudio.microsoft.com/" target="_blank">Visual studio</a>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
</script>
</body>
</html>
