<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid">

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
    			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  			</ol>
  		<div class="carousel-inner">
    	<div class="carousel-item active">
      		<img src="https://www.wallpaperup.com/uploads/wallpapers/2014/07/29/410329/5a843250cf0575973bcc2c4a3083f88e-700.jpg" class="d-block w-100" alt="...">
    	</div>
    	<div class="carousel-item">
      		<img src="https://i.imgur.com/w2VzVNk.jpg" class="d-block w-100" alt="...">
    	</div>
    	<div class="carousel-item">
      		<img src="https://queenmobs.com/wp-content/uploads/2015/05/snorlax-2.jpg" class="d-block w-100" alt="...">
    	</div>
  		</div>
  		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    	<span class="sr-only">Previous</span>
  		</a>
  		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
    	<span class="sr-only">Next</span>
  		</a>
		</div>

		<header>
   		 <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>WELCOME ONE ELEVEN</h1>
                    <p class="lead">Tempat Nongkrong Asyik Sembari Rasan-rasan</p>
                </div>
            </div>
        </div>
    	</div>
		</header>
		<article class="card-post">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card-post card-deck">
                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/ebook-android/">
                            <img class="card-img-top" src="https://www.petanikode.com/img/android/ebook/ebook-android.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Ebook dan Video Pemrograman Android Gratis dari Google</h4>
                            </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/python-file/">
                            <img class="card-img-top" src="https://www.petanikode.com/img/python/python.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Belajar Python: Cara Membaca dan Menulis File di Python</h4>
                            </div>
                            </a>
                        </div>

                        <div class="card">
                            <a class="card-post-link" href="https://www.petanikode.com/android-activity/">
                            <img class="card-img-top" src="https://www.petanikode.com/img/android/android.png" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Pemrograman Android: Mengenal Activity dan Siklus Hidupnya</h4>
                            </div>
                            </a>
                        </div>
                    </div>
				</article>

		<div class="row">
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-comments"></i>
				</div>
				<div class="mr-5">26 New Messages!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-list"></i>
				</div>
				<div class="mr-5">11 New Tasks!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-shopping-cart"></i>
				</div>
				<div class="mr-5">123 New Orders!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-6 mb-3">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-fw fa-life-ring"></i>
				</div>
				<div class="mr-5">13 New Tickets!</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
		</div>

		<!-- Area Chart Example-->
		<div class="card mb-3">
			<div class="card-header">
			<i class="fas fa-chart-area"></i>
			Visitor Stats</div>
			<div class="card-body">
			<canvas id="myAreaChart" width="100%" height="30"></canvas>
			</div>
			<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
		</div>

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>