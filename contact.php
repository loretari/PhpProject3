<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>The Winner Solution - Contact</title>

<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="CSS/style_4pamoka_03.css">

	<script src="https://kit.fontawesome.com/8ba539f7cb.js" crossorigin="anonymous"></script>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {

            $("#contact").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err2").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
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
		<!--	section, fono skaidri spalva, su rgba()-->
		<section class="container2">
			<div class="logo">
			
                            <a href="index.php"><img src="images/logo_karuna3.jpg"></a>
			</div>
			<section class="container">

				<i class="fas fa-star"></i>
				<h1>The Winner Solution</h1>
				<!--		section, susiaurintas turinys, su width-->

				<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium deserunt repellat ab esse dignissimos nulla commodi pariatur, aut quam dolor.</p>
				<a href="contact.html">Visit us Today</a>

			</section>
		</section>

	</header>
	<!--nav, fono spalva-->
<!-- Navigation -->
         <?php require_once 'nav.php';?>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        Lor.DesIgn
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2303.208434479905!2d25.27389347098608!3d54.74113708453809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd912265b3c7cd%3A0xcf19d7266059f083!2sRugi%C5%B3%20g.%207%2C%20Vilnius%2008430!5e0!3m2!1slt!2slt!4v1612786746353!5m2!1slt!2slt"  width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <a href="mailto:name@example.com">loreta@loretari.com</a>
                    </p>
                    <p>Address:
                        <strong>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, vitae, distinctio, possimus repudiandae cupiditate ipsum excepturi dicta neque eaque voluptates tempora veniam esse earum sapiente optio deleniti consequuntur eos voluptatem.</p>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">                           
                                <button type="submit"  id="contact" class="btn btn-default">Submit</button>
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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!---
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    --->
   

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
