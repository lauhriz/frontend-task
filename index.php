<!DOCTYPE html>
<html lang="en" class="html-responsive">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include 'utilities/favicon.php' ?>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css" />
    <?php include 'utilities/csslinks.php' ?>


    <title><?php include 'utilities/title.php' ?></title>
</head>

<body class="text-center">
    <div class="container">
        <?php include 'components/menu.php'; ?>
    </div>

    <?php $page = isset($_GET['page']) ? $_GET['page'] : 'main'; ?>


    <?php
    if ($page === 'main') {
        include 'pages/main.php';
    } else if ($page === 'about-us') {
        include 'pages/about-us.php';
    } else if ($page === 'services') {
        include 'pages/services.php';
    } else if ($page === 'works') {
        include 'pages/works.php';
    } else if ($page === 'blog') {
        include 'pages/blog.php';
    } else if ($page === 'contact') {
        include 'pages/contact.php';
    } else if ($page === 'service') {
        include 'pages/service.php';
    } else if ($page === 'work') {
        include 'pages/work.php';
    } else if ($page === 'blog-inner') {
        include 'pages/blog-inner.php';
    }
    ?>


    <?php include 'components/footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>