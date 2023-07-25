<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Career Buddy</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .modal-backdrop {
        z-index: -1;
    }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="partials/sidebars.css">
</head>

<body style="background-color:rgb(219 218 218);">
    <main style="max-width: 100%;">

        <div class="sidebar" style="
            height:100%; 
            position:fixed;
            top: 0;
            left: 0; ">
            <?php
            include 'partials/_sidebar.php';
            ?>
        </div>
        <div class="container my-2" style=" width: 70%;
            position: absolute;
            margin: 308px; z-index: -1;">
            <!-- corousal -->
            <div id=" carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/c-img.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
            <!-- corousal end -->
            <!-- text heading -->
            <h1 class="fs-2 my-2" style="position:relative; left:60px;">Have a discussion regarding Your College
                Placements.
            </h1>
        </div>
    </main>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="/partials/sidebars.js"></script>
</body>

</html>