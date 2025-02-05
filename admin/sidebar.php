<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    

    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">

    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">

    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php include('function.php');
    if(empty($_SESSION['user'])){
        header('location: login.php');
    }
    $id= $_SESSION['user'];
    $sql="SELECT * FROM `users` WHERE `id` = $id";
    $rs =$cn->query($sql);
    $row = $rs->fetch_assoc();
?>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left">
                        <div class="wrap-top">
                            <img src="assets/icon/admin-logo.png" alt="">
                            <h5>Jong Deng News</h5>
                        </div>
                        <div class="wrap-center">
                            <img width="50" height="50" src="assets/image/<?php echo $row['profile'] ?>" alt="" >
                            <h6>Welcome <?php echo $row['username'] ?></h6>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span><u>NEWS CONTENT</u></span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li class="w-100">
                                            <a href="view-news.php" class="bg-info w-75 text-black">View post</a>
                                            <a href="add-news.php" class="bg-primary w-75 text-black">Add news</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span><u>LOGO CONTENT</u></span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-logo.php" class="bg-success w-75 text-black">View logo</a>
                                            <a href="add-logo.php" class="bg-secondary w-75 text-black">Add logo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                    <span ><u>FEEDBACK</u></span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-feedback.php" class="bg-primary w-75 text-black">View feedback</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                    <span ><u>FOLLOW US</u></span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="add-follow.php" class="bg-warning w-75 text-black">Add SocialMedia Platform</a>
                                            <a href="view-social.php" class="bg-info w-75 text-black">View Item</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent" >
                                    <a class="parent" href="javascript:void(0)">
                                    <span ><U>ABOUT US</U></span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="add-text.php" class="bg-success w-75 text-black">ADD TEXT</a>
                                            <a href="view-text.php" class="bg-danger w-75 text-black">View TEXT</a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                                <li class="parent" >
                                    <a class="parent" href="logout.php">
                                        <span>LOGOUT</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>