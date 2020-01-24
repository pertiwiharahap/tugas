<!DOCTYPE html>
<html lang="en">
<?php
include ("koneksi.php");
?>


<head>
  <meta charset="utf-8">
  <title>TheEvent - Bootstrap Event Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logoLP3I.png" alt="" title=""></a>
     </div>

      <<nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="index.php">Home</a></li>
          <li><a href="#about">About</a></li>
		     <li><a href="#supporters">LOGIN</a></li>
			 	     <li><a href="#supporters">Pengumuman</a></li>
		  <li><a href="#speakers">Speakers</a></li>
		   <li><a href="#schedule">Schedule</a></li>
		     <li><a href="#venue">Venue</a></li>
			 <li><a href="#gallery">Gallery</a></li>
		  <li><a href="#supporters">Sponsors</a></li>
		   <li><a href="#contact">Contact Section</a></li>
      
          
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">KEGIATAN LCC <br><span>(LP3I COMPUTER CLUB)</h1>
      <p class="mb-4 pb-0">2020, Politeknik LP3I, Indonesia</p>
      <a href="https://www.youtube.com/watch?v=TKwcw1cPnpk" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">tentang LCC</a>
    </div>
	
	
	
	
	
	
	
	
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Tentang LCC</h2>
            <p>Merupakan program dari kampus politekni LP3I Pekanbaru, hal ini di tujukan untuk bahan pembelajaran
			setalah jam perkulihan dan tujuan paling utamanya adalah untuk meningkatkan prestasi mahasiswanya.</p>
          </div>
          <div class="col-lg-3">
            <h3>Dimana</h3>
            <p>Politeknik LP3I Pekabaru, Indonesia</p>
          </div>
          <div class="col-lg-3">
            <h3>Kapan</h3>
            <p>Senin dan Sabtu</p>
          </div>
        </div>
      </div>
    </section>
	</br></br></br></br>
	
	
    
	<!--==========================
      LOGIN
    ============================-->
<section id="intro">
      <div class="container wow fadeInUp">
        <div class="section-header">
		  <h3><a href="LOGIN.html"></a></h3>
          <h2>FORM LOGIN</h2>
          <p>SILAHKAN LOGIN.</p>
        </div>
		<form action ="olah_login.php" method ="POST"> 

        <div class="form">
          <div id="errormessage"></div>
        <form action="olah_login.php" method="POST" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="id_operator" class="form-control" id="id_operator" placeholder="id_operator" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="status" id="status" placeholder="username" data-rule="email" data-msg="Please enter a valid status" />
                <div class="validation"></div>
              </div>
            </div>
             <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" id="password" placeholder="password" data-rule="email" data-msg="Please enter a valid password" />
              </div>
            <div class="text-center"><button type="submit">LOGIN</button></div>
        
		 </form>
        </div>

      </div>

    </section>

  </main>


            </div>
          </div>
        </form>

      </div>
    </section>

	

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Event LCC</h2>
          <p>Here are some of our speakers</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/7.JPEG" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
          
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/8.JPEG" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/9.JPEG" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
                
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/10.JPEG" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
               
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/11.JPEG" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
              
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/17.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html"></a></h3>
               
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
	

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Schedule UKM</h2>
          <p>Here is our event schedule</p>
        </div>

        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#day-1" role="tab" data-toggle="tab">LCC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-2" role="tab" data-toggle="tab">LAC</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#day-3" role="tab" data-toggle="tab">LMBC</a>
          </li>
        </ul>

        
        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">

            

            <div class="row schedule-item">
              <div class="col-md-2"><time>Senin : 14.00-15.00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/18.jpg" alt="Brenden Legros">
                </div>
                <h4>MI int 1 J <span> Diruangan LAB A</span></h4>
                <p>Pembimbing Diki Kurniawan .</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>Selasa  : 13.00-14.00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/18.jpg" alt="Hubert Hirthe">
                </div>
                <h4>AB int 2 J . <span>Diruangan LAB A </span></h4>
                <p>Pembimbing Syahrul and Dhani .</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>Rabu  :  16.00-17.00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/18.jpg" alt="Cole Emmerich">
                </div>
                <h4>AB 3 sept J. <span>Diruangan LAB A</span></h4>
                <p>Pembimbing Syahrul and Dhani.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>Kamis  : 14:00-15:00</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/18.jpg" alt="Jack Christiansen">
                </div>
                <h4>AK int 1 J. <span>Diruangan LAB A</span></h4>
                <p>Pembimbing Syahrul and Dhani.</p>
              </div>
            </div>

          </div>
          <!-- End Schdule Day 1 -->

          <!-- Schdule Day 2 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-2">

           

            <div class="row schedule-item">
              <div class="col-md-2"><time>08:00 PM / SENIN</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/12.png" alt="Hubert Hirthe">
                </div>
                <h4>AK 1 . <span> Diruangan 303</span></h4>
                <p>Pembimbing Misna Mariza.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00 PM / SABTU</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/12.png" alt="Cole Emmerich">
                </div>
                <h4>AK 2. <span>Diruangan 303</span></h4>
                <p>Pembimbing Desi Nuradila.</p>
              </div>
            </div>

            <div class="row schedule-item">
              <div class="col-md-2"><time>11:00 PM / SABTU</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/12.png" alt="Jack Christiansen">
                </div>
                <h4>AB. <span>Diruangan 303</span></h4>
                <p>Pembimbing Egi Lutya.</p>
				</div>
              </div>
            </div>

          <!-- End Schdule Day 2 -->

          <!-- Schdule Day 3 -->
          <div role="tabpanel" class="col-lg-9  tab-pane fade" id="day-3">
            <div class="row schedule-item">
              <div class="col-md-2"><time>10:00-11:00 / SABTU</time></div>
              <div class="col-md-10">
                <div class="speaker">
                  <img src="img/speakers/19.JPEG" alt="Cole Emmerich">
                </div>
                <h4>AB 3 SEPT. <span> DIruangan 303</span></h4>
                <p>Pembimbing Ms.Amelyadora.</p>
              </div>
            </div>

            
                  
          <!-- End Schdule Day 2 -->

        </div>

      </div>

    </section>

    <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid">

        <div class="section-header">
          <h2>FASILITY</h2>
          <p>Event venue location info and fasility</p>
        </div>

        <div class="row no-gutters">
          <div class="col-lg-6 venue-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6729200189134!2d101.45605309999999!3d0.48915340000000873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aec29961642b%3A0xa4ff44115224f1cc!2sPoliteknik%20LP3I%20Kampus%20K.%20Pekanbaru!5e0!3m2!1sid!2sid!4v1578983670228!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </div>

      </div>

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/1.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/2.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/3.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/4.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/5.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/6.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/7.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="venue-gallery">
              <a href="img/venue-gallery/8.jpg" class="venobox" data-gall="venue-gallery">
                <img src="img/venue-gallery/8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>
      </div>

    </section>

    

    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel">
	  
        <a href="img/gallery/13.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/13.JPEG" alt=""></a>
        <a href="img/gallery/14.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/14.JPEG" alt=""></a>
        <a href="img/gallery/15.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/15.JPEG" alt=""></a>
        <a href="img/gallery/16.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/16.JPEG" alt=""></a>
        <a href="img/gallery/17.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/17.JPEG" alt=""></a>
        <a href="img/gallery/18.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/18.JPEG" alt=""></a>
        <a href="img/gallery/19.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/19.JPEG" alt=""></a>
        <a href="img/gallery/20.JPEG" class="venobox" data-gall="gallery-carousel"><img src="img/gallery/20.JPEG" alt=""></a>
      
	  </div>
    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>Sponsors</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/1.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/2.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/3.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/4.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/5.png" class="img-fluid" alt="">
            </div>
          </div>
        
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/6.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/7.png" class="img-fluid" alt="">
            </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/8.png" class="img-fluid" alt="">
            </div>
          </div>

        </div>

      </div>

    </section>

    
    <!--==========================
      Subscribe Section
    ============================-->
    <section id="pengumuman">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Pengumuman</h2>
          <p>pengumuman hasil ujian LCC politeknik LP3I.</p>
        </div>
		
		<?php
			
			if (empty($_GET['nim'])){
				
				$nim = "";
			}else{
				
				$nim = $_GET['nim'];
				
			}
		
		if (empty($nim)){
			
		}else{
			
		
		?>
		
		<table border="6" width="100%" >
		
			<thead>
			
				<tr align="center">
				
					<td>Nim</td>
					<td>Jurusan</td>
					<td>Nilai Ujian</td>
					<td>Tanggal Ujian</td>
					<td>UKM</td>
					<td>Keterangan</td>
					
					
				</tr>
				
			
			</thead>
			
			<tbody>
			
			<?php
			
				$nim = $_GET['nim'];
				include ("koneksi.php");
				include ('laporan.php');
				
				while ($data = mysqli_fetch_array($query)){
			
			?>
			<tr>
			<td><?php echo $data['NIM']; ?></td>
			<td><?php echo $data['jurusan']; ?></td>
			<td><?php echo $data['nilai_ujian']; ?></td>
			<td><?php echo $data['taggal_ujian']; ?></td>
			<td><?php echo $data['ukm']; ?></td>
			<td><?php echo $data['keterangan']; ?></td>
			</tr>
			<?php
			
				}
			
			?>
			
				</tbody>
		
				</table><br>
			
			
			<?php

			}
			
			?>
			

        

      </div>
    </section>
	
	



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Nihil officia ut sint molestiae tenetur.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Taman sari Street, NY 28125 , Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:082283996978">082283996978</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:pertiwiharahap01@gmail">pertiwiharahap01@gmail</a></p>
            </div>
          </div>

        </div>
		
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="index.php">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Taman sari Street <br>
              Indonesia<br>
              United States <br>
              <strong>Phone:</strong> 082384008775<br>
              <strong>Email:</strong> pertiwiharahap01@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
