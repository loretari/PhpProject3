<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {
    
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>The Winner Solution - Blog</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


	<!-- Custom CSS -->
	<link rel="stylesheet" href="CSS/style_4pamoka_03.css">

	<script src="https://kit.fontawesome.com/8ba539f7cb.js" crossorigin="anonymous"></script>
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
				<a href="contact.php" class="btn btn-default btn-lg">Visit us Today</a>

			</section>
		</section>

	</header>
	<!--nav, fono spalva-->

    <!-- Navigation -->
     <?php require_once 'nav.php';?>
	
<main class="main">
      
          <div class="container6">
        <div class="container">
           
            <div class="box">
             <h2 class="text-center">Welcome <?php echo $fname; echo " "; echo $lname; ?> - <a href="logout.php">Logout</a></h2>  
                    <hr>
                    <h2 class="intro-text text-center">Lor.DesIgn Blog
                    </h2>
                        <hr>
                </div>
			</div>
     
           
                  <div class="container">
                   <div class="box">
                   <figure>
                       <img src="../PhpProject3/images/1.gif" alt="Evelina">
					</figure>
                   
                    <h2>Where do we start
                        <br>
                        <small>Vasario 08, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
                    <hr>
                    </div>
			  </div>
             
                     <div class="container">
                   <div class="box">
                   <figure>
                       <img src="../PhpProject3/images/2.gif" alt="Evelina">
					</figure>
                    <h2>How we do it
                        <br>
                        <small>Kovo 15, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                   <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
                    <hr>
                </div>
			  </div>
                <div class="container">
                   <div class="box">
                   <figure>
                       <img src="../PhpProject3/images/3.gif" alt="Evelina">
					</figure>
                    <h2>What we recommend
                        <br>
                        <small>Balandžio 24, 2021</small>
                    </h2>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
            
			
	</div>
	</div>
		</main>
      

    <!-- /.container -->
<!-- Modal 1 -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Where do we start</h4>
		  </div>
		  <div class="modal-body">
                      <p>We have a fun, interactive online dress design process. You will work directly with our designers as they guide you through turning your vision into a sketch, into your own unique gown.</p>
                      <p>Start by taking our 2 minute survey. We will gather some information about your style to help us determine how we can best work with you.</p>
                      <p>If we're a good match we'll pair you with one of our designers for a complimentary design call.</p>
                      <p>Together we will create a completely unique custom gown for you at direct to consumer prices!.</p>
                      
                  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
          </div>
        </div>
                
                
                
             <!-- Modal 2 -->
	<div id="myModal2" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">How we do it</h4>
		  </div>
		  <div class="modal-body">
                      <p>The choice of fabric is essential for the pattern to show off optimally. Many fashion designers use silk fabrics. The soft natural material is hypoallergenic, has high elasticity, cools in the heat and warms in the cold. If lace is used, it should be placed on high-quality material, otherwise, it may irritate the skin and cause an itching sensation.</p>
                      <p>Satin is a heavy fabric that flatters seamlessly around the silhouette of the bride. </p>
                      <p>Satin doesn’t wrinkle, feels soft and gives the bridal gown a beautiful shine. Organza, on the other hand, is transparent, thin and light, while it has an optimal tenacity. </p>  
                     <p>This material has a shimmering appearance and gives the bridal gown volume, such as tulle. Tulle is a stiff, transparent fabric that gives the dress more volume without weighing it down. </p>
                      <p>However, chiffon is a transparent and delicate material, which is finer. It is often used in multiple layers as the outer fabric. To find the right shade of the substance, it is advisable to match the substances to the skin color, by daylight. After the cut and silhouette are determined, the bride should always wear the same brassiere and shoes during fitting appointments.</p>
                  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>   
               
                
	  </div>
	</div>
             
      <!-- Modal 3 -->
	<div id="myModal3" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">How we do it</h4>
		  </div>
		  <div class="modal-body">
                      <p>The best way to prepare for our initial consultation is to gather ideas about your personal bridal style.</p>
                      <p>Ask yourself questions like: What trends am I drawn to? What fabrics do I love? What silhouettes make me feel beautiful? Next, set aside time to research. </p>
                      <p>Page through bridal magazines, browse Pinterest for ideas, perhaps even try on a few dresses at a boutique.</p>  
                     <p>Make sure to take pictures and save examples of what you like and dislike and bring them to our meeting!</p>
                      
                  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>   
               
                
	  </div>
	</div>
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
   <!--
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    --->
   <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
} else {
    header("location:login.php");
}
?>