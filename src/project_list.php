<?php
include "backend_api/display_routes.php";
include "backend_api/config.php";

$conn = initialise_pgsql_connection();



if (!isset($_SESSION['user_email'])) {
    session_start();
}

if (isset($_GET['topic'])) {
    $topic_name = $_GET['topic'];
    $current_mode = 'topic';
} else if (isset($_GET['search'])) {
    $search_field = $_GET['search'];
    $current_mode = 'search';
} else {
    header("Location: discover.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title> CS2102</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <style>
        .search {
            background-color:transparent !important;
            border:none !important;
            outline: none;
            color: white;
        }
    </style>
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
<?php
    include "header.php";
?>

<!-- ==== SECTION DIVIDER3 -->
<section class="section-divider textdivider divider3">
    <?php
        include "search.php";
    ?>
</section><!-- section -->

<!-- ==== PORTFOLIO ==== -->


<!-- ==== BLOG ==== -->
<div class="container" id="blog" name="blog">
    <br>
    <div class="row">
        <br>
        <h1 class="centered">Search Results for
            <?php
                if ($current_mode == 'topic') {
                    echo $topic_name;
                } else if ($current_mode == 'search') {
                    echo $search_field;
                }
            ?>
        </h1>
        <hr>
        <br>
        <br>
    </div><!-- /row -->

    <?php
        if ($current_mode == 'topic') {
            echo display_project_list($conn, $topic_name);

        } else if ($current_mode == 'search') {
            echo display_search_list($conn, $search_field);
        }
    ?>
</div><!-- /container -->

<?php
    include "footer.php";
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/retina.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/jquery-func.js"></script>
</body>
</html>
