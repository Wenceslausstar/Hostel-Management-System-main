
<!DOCTYPE html>

<head>
    <title>SHMS - Hostel Manager</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->

    <link href="web/css/font.css" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="web/css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="web/w3.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-------------- Login Form ----------------------------------------------->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html">Shalom Hostel Management System</a></h1>
                    <!-- if logo is image enable this
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="form-right-inf">
                        <h2>Hostel Manager Login</h2>
                        <div class="login-form-content">
                            <form action="hm-backend/login-hm.php" class="signin-form" method="post">
                                <div class="one-frm">
                                    <input type="text" name="username" placeholder="Hostel Manager id" required="" autofocus>
                                </div>
                                <div class="one-frm">
                                    <input type="password" name="pwd" placeholder="Password" required="">
                                </div>
                                <button class="btn btn-style mt-3" name="login-submit">Login </button>
                                <p class="already">Login as <a href="index_ha.php">Hostel Admin</a></p>
                                <p class="already" style="margin-top:-2px;">Login as <a href="index.php">Student</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------------- -->
</body>

</html>
