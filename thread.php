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
    </style>

    <link rel="stylesheet" href="partials/sidebars.css">

</head>

<body>
    <main>
        <div class="sidebar" style="
            height:100%; 
            position:fixed;
            top: 0;
            left: 0; ">
            <?php
        include 'partials/_dbconnect.php';
        include 'partials/_sidebar.php';
        ?>
        </div>

        <div class=" container my-2" style="position:absolute;margin:300px;">
            <?php
        $id=$_GET['catid'];
        $sql="Select *from categories where cat_id='$id'";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
            $title=$row['cat_title'];
            $desc=$row['cat_desc'];
        }
       echo ' 
            <div class="header">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                    data-bs-smooth-scroll="true" class="scrollspy-example bg-light my-3 p-3 rounded-2" tabindex="0">
                    <h2 id="scrollspyHeading1">Welcome to
                        '.$title.' Discussion
        </h2>
        <p>
           '. $desc.'
        </p>
        <h3>Forum Rules</h3>
        <p>Keep it friendly.</p>
        <p>Stay on topic. </p>
        <p> Refrain from demeaning, discriminatory, or harassing behaviour and speech.</p>
        </div>
        </div>
        ';
        ?>

        </div>
    </main>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="/partials/sidebars.js"></script>
</body>

</html>