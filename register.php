<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
   
	<title>The Winner Solution - Register</title>

<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="CSS/style_4pamoka_03.css">

	<script src="https://kit.fontawesome.com/8ba539f7cb.js" crossorigin="anonymous"></script>
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

     <!-- jQuery -->
    <script src="js/jquery.js"></script>
	
	<!-- Script -->
	<script type="text/javascript">
        $(document).ready(function () {

            $("#register").click(function () {

                fname = $("#fname").val();
                lname = $("#lname").val();
                email = $("#email").val();
                password = $("#password").val();

                $.ajax({
                    type: "POST",
                    url: "adduser.php",
                    data: "fname=" + fname + "&lname=" + lname + "&email=" + email + "&password=" + password,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Account</strong> processed. \ \
                                                 </div>');

                            window.location.href = "index.php";

                        } else if (html == 'false') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> already in system. \ \
                                                 </div>');                    

                        } else if (html == 'fname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> is required. \ \
                                                 </div>');
												 
						} else if (html == 'lname') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Last Name</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> is required. \ \
                                                 </div>');

                        } else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email Address</strong> format is not valid. \ \
                                                 </div>');
												 
						} else if (html == 'pshort') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Password</strong> must be at least 4 characters . \ \
                                                 </div>');

                        } else {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again. \ \
                                                 </div>');
                        }
                    },
                    beforeSend: function () {
                        $("#add_err2").html("loading...");
                    }
                });
                return false;
            });
        });
    </script>
											
</head>

<body>
	<!--header, fono paveikslėlis-->
	<header>
		<div class="logo">
                    <a href="index.php"><img src="images/logo_karuna3.jpg"></a>
		</div>
		<!--	section, fono skaidri spalva, su rgba()-->
		<section class="container2">
			
			<!--nav, fono spalva-->
			<div class="brand">
				<section class="container">
					<i class="fas fa-star"></i>
					<h1>The Winner Solution</h1>
					<!--		section, susiaurintas turinys, su width-->
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium deserunt repellat ab esse dignissimos nulla commodi pariatur, aut quam dolor.</p>
					<a href="contact.php" class="btn btn-default btn-lg">Visit us Today</a>
				</section>
			</div>
		</section>
	</header>

	<!-- Navigation -->
         <?php require_once 'nav.php';?>

   <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Registration
                        <strong>form</strong>
                        <div id="add_err2"></div>
                    </h2>
                    <hr>
                     <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>First Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Last Name</label>
                                <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Adress</label>
                                <input type="email"  id="email" name="email" maxlength="25"class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" id="passwors" name="password" maxlength="10" class="form-control">
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" id="register" class="btn btn-default">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
		<ul>
			<li>
                            <p> <i class="fab fa-angellist"></i><a href="contact.php"> Contact us</a></p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, ipsa!</p>
			</li>
			<li>
                            <p> <i class="fas fa-arrow-circle-down"></i> <a href="about.php">About us</a></p>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, a.</p>
			</li>

		</ul>
		<div class="Loreta">
			<p> Copyright &copy; Lor.DesIgn 2021</p>
		</div>
	</footer>

 <!-- jQuery -->
  

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
