<?php 
session_start();
include "../admina/inc/config.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	
	<link rel="shortcut icon" href="images/favicon.ico">
    
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/owl.carousel.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link href="css/colors/" rel="stylesheet" type="text/css" id="colors" />
    
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">	
    
	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->
	
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
	<script src="js/superfish.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/animate.js" type="text/javascript"></script>
	<script src="js/myscript.js" type="text/javascript"></script>
	
</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="images/preloader.gif" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page" class="single_page">
	
		<!-- HEADER -->
		<header>
			
			<!-- MENU BLOCK -->
			<div class="menu_block">
			
				<!-- CONTAINER -->
				<div class="container clearfix">
					
					<!-- LOGO -->
					<div class="logo pull-left">
						<a href="index.html" ><span class="b1">w</span><span class="b2">h</span><span class="b3">i</span><span class="b4">t</span><span class="b5">e</span></a>
					</div><!-- //LOGO -->
					
					<!-- SEARCH FORM -->
					<div id="search-form" class="pull-right">
						<form method="get" action="#">
							<input type="text" name="Search" value="Search" onFocus="if (this.value == 'Search') this.value = '';" onBlur="if (this.value == '') this.value = 'Search';" />
						</form>
					</div><!-- SEARCH FORM -->
					
					<!-- MENU -->
					<div class="pull-right">
						<nav class="navmenu center">
							<ul>
								<li class="first scroll_btn"><a href="index.html">Home</a></li>
								<li class="scroll_btn"><a href="index.html#about">About Us</a></li>
								<li class="scroll_btn"><a href="index.html#projects">Projects</a></li>
								<li class="scroll_btn"><a href="index.html#team">Team</a></li>
								<li class="scroll_btn"><a href="index.html#news">News</a></li>
								<li class="scroll_btn last"><a href="index.html#contacts">Contacts</a></li>
								<li class="sub-menu active">
									<a href="javascript:void(0);">Pages</a>
									<ul>
										<li class="active"><a href="blog.html">Blog</a></li>
										<li><a href="blog-post.html">Blog Post</a></li>
										<li><a href="portfolio-post.html">Portfolio Single Work</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div><!-- //MENU -->
				</div><!-- //MENU BLOCK -->
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
		
		
		<!-- BREADCRUMBS -->
		<section class="breadcrumbs_block clearfix parallax">
			<div class="container center">
				<h2><b>The</b> Blog</h2>
				<p>Publication of the latest news, articles, and free apps.</p>
			</div>
		</section><!-- //BREADCRUMBS -->
		
		
		<!-- BLOG -->
		<section id="blog">
			<?php 
			$nama = $_POST['nama'];
			$pendidikan = $_POST['pendidikan'];
			$umur = $_POST['umur'];
			$jabatan = $_POST['jabatan'];
			$jk = $_POST['jk'];
			$status_nikah = $_POST['status_nikah'];

			echo $nama, '<br>'; 
			

			function Getfloat($str) { 
			  if(strstr($str, ",")) { 
			    $str = str_replace(".", "", $str); // replace dots (thousand seps) with blancs 
			    $str = str_replace(",", ".", $str); // replace ',' with '.' 
			  } 
			  
			  if(preg_match("#([0-9\.]+)#", $str, $match)) { // search for number that may contain '.' 
			    return floatval($match[0]); 
			  } else { 
			    return floatval($str); // take some last chances with Getfloat 
			  } 
			}	


			//inisialisasi nilai bobot
			$dtb=$db->fetch_custom("select bobot.b_pendidikan, bobot.b_umur, bobot.b_jabatan, bobot.b_jk, bobot.b_statusNikah from bobot");
			foreach ($dtb as $bobot) {
				$bobot_pendidikan = $bobot->b_pendidikan;
				$bobot_umur = $bobot->b_umur;
				$bobot_jabatan = $bobot->b_jabatan;
				$bobot_jk = $bobot->b_jk;
				$bobot_statusNikah = $bobot->b_statusNikah;
				
			}
			

			//inisialisasi nilai kedekatan
			$dtb1=$db->fetch_custom("select kedekatan.k_pendidikan, kedekatan.k_umur, kedekatan.k_jabatan, kedekatan.k_jk, kedekatan.k_status from kedekatan");
			foreach ($dtb1 as $kedekatan) {
				$kedekatan_pendidikan = $kedekatan->k_pendidikan;
				$kedekatan_umur = $kedekatan->k_umur;
				$kedekatan_jabatan = $kedekatan->k_jabatan;
				$kedekatan_jk = $kedekatan->k_jk;
				$kedekatan_statusNikah = $kedekatan->k_status;
				
			}
			
			//jumlah data sample atau data pembanding
			$sql = $db->fetch_all('sample');
			$jumlah_data = $sql->rowCount();
			//echo $jumlah_data;
			
			//inisialisasi semua nilai kedekatan dari tabel sample
			$sqlKedekatan = $db->fetch_custom("select pendidikan, umur, jabatan, jk, status_nikah, keterlibatan from sample");
			$i=1;
			foreach ($sqlKedekatan as $valueKedekatan) {
				if ($valueKedekatan->pendidikan==$pendidikan){
						$kedekatanPendidikanBaru[$i] = 1;
				}else{
					$kedekatanPendidikanBaru[$i] = $kedekatan_pendidikan;
				}
				//echo $valueKedekatan->pendidikan;
				//echo $kedekatanPendidikanBaru[$i];

				if ($valueKedekatan->umur==$umur){
						$kedekatanUmurBaru[$i] = 1;
				}else{
					$kedekatanUmurBaru[$i] = $kedekatan_umur;
				}

				if ($valueKedekatan->jabatan==$jabatan){
						$kedekatanJabatanBaru[$i] = 1;
				}else{
					$kedekatanJabatanBaru[$i] = $kedekatan_jabatan;
				}

				if ($valueKedekatan->jk==$jk){
						$kedekatanJkBaru[$i] = 1;
				}else{
					$kedekatanJkBaru[$i] = $kedekatan_jk;
				}

				if ($valueKedekatan->status_nikah==$status_nikah){
						$kedekatanStatusNikahBaru[$i] = 1;
				}else{
					$kedekatanStatusNikahBaru[$i] = $kedekatan_statusNikah;
				}

				 $hasil[$i] = ((Getfloat($kedekatanPendidikanBaru[$i])*Getfloat($bobot_pendidikan))+(Getfloat($kedekatanUmurBaru[$i])*Getfloat($bobot_umur))+(Getfloat($kedekatanJabatanBaru[$i])*Getfloat($bobot_jabatan))+(Getfloat($kedekatanJkBaru[$i])*Getfloat($bobot_jk))+(Getfloat($kedekatanStatusNikahBaru[$i])*Getfloat($bobot_statusNikah)))/(Getfloat($bobot_pendidikan)+Getfloat($bobot_jabatan)+Getfloat($bobot_umur)+Getfloat($bobot_jk)+Getfloat($bobot_statusNikah));
				echo $hasil[$i];
				echo '<br>';
				$i++;
			}
				

			

			//hitung semua hasil
			for($j=1; $j<=$jumlah_data; $j++){
			 // $hasil[$j] = ((Getfloat($kedekatanPendidikanBaru[$j])*Getfloat($bobot_pendidikan))+(Getfloat($kedekatanUmurBaru[$j])*Getfloat($bobot_umur))+(Getfloat($kedekatanJabatanBaru[$j])*Getfloat($bobot_jabatan))+(Getfloat($kedekatanJkBaru[$j])*Getfloat($bobot_jk))+(Getfloat($kedekatanStatusNikahBaru[$j])*Getfloat($bobot_statusNikah)))/(Getfloat($bobot_pendidikan)+Getfloat($bobot_jabatan)+Getfloat($bobot_umur)+Getfloat($bobot_jk)+Getfloat($bobot_statusNikah));
			//	echo $hasil[$j];		
			}


			 ?>
			
		</section><!-- //BLOG -->
	</div><!-- //PAGE -->

	
	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->
	
	<!-- FOOTER -->
	<footer>
			
		
	</footer><!-- //FOOTER -->
	
	
	

</div>
</body>
</html>