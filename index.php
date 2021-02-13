<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>The Winner Solution - Home</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="CSS/style_4pamoka_03.css">

	<script src="https://kit.fontawesome.com/8ba539f7cb.js" crossorigin="anonymous"></script>
	
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

         <?php
    
    if (isset($_GET["logout"])) {
        
        if ($_GET["logout"] == "true") { ?>
   
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>You have benn logged out of the system.</strong>
    </div>
    <?php
     }
    }
    ?>
	<!-- Navigation -->
         <?php require_once 'nav.php';?>
	


	<main>

		<article class="container">

			<figure>

				<img src="images/2016-11-11_173549.gif" alt="Evelina ">
			</figure>
			<div class="text">
				<h2> We have a Great Workspace</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quos, ratione pariatur a nihil quibusdam non, suscipit quae aliquid, debitis perspiciatis asperiores. Accusamus ullam, distinctio dolor eos error. Molestias, iusto.</p>
				<a href="blog.php" class="btn btn-default btn-lg">Read more</a>
			</div>
		</article>

		<section class="main">
		
				<div class="container5">
                                    <article class="container">
					<figure>
						<img src="images/2016-11-11_173640.gif" alt="Evelina">
					</figure>
					<div class="text">
						<h2> The Awesomeness of our Work</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus nesciunt enim fugiat harum, itaque alias, totam provident nisi temporibus illo atque! Architecto nobis, iusto pariatur, laboriosam temporibus.</p>
						<a href="blog.php" class="btn btn-default btn-lg">Read more</a>
					</div>
				</article>
                                </div>
		</section>
	

		<article class="container">
			<figure>
				<img src="images/2019-11-10_153948.bmp" alt="Evelina">
			</figure>
			<div class="text">
				<h2> Pro Concepts</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid doloribus perspiciatis officiis natus vero veniam.</p>
				<a href="blog.php" class="btn btn-default btn-lg">Read more</a>
			</div>
		</article>

	</main>

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
    <!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
</body></html>