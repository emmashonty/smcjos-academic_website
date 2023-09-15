<?php 
  include 'plugins/crud/lib/Database.php';
  include 'plugins/crud/classes/Selector.php';
  $fm = new Format();
  $sl = new Selector();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Home || St. Murumba College</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta description="11th of July 1958 an application was sent to the permanent secretary, Ministry of Education Kaduna applying for the approval to establish a Roman Catholic Mission Secondary Day School for Boys in Jos. The application was approved and on 27th of January 1959 the operation of the school commenced.">
  

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  
  
</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader-cover.png" alt="preloader" style="position: absolute;">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-6 text-center text-lg-left">
          <strong>CALL </strong>
          <a class="text-color mr-3" href="tel:+2349135523749">+2349135523749,</a>
          <a href="tel:+2349135548688" class="text-color mr-3">+2349135548688,</a>
          <a href="tel:+2348160577800" class="text-color mr-3">+2348160577800</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="https://twitter.com/" target="_blank"><i class="ti-twitter-alt"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="admission.html">Admission</a></li>
            <li class="list-inline-item">
               <div class="dropdown">
                <a href="#" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block dropdown-toggle" data-toggle="dropdown">Login
                <span class="caret"></span></a>
                <ul class="list-unstyled dropdown-menu">
                  <li class="list-item"><a href="javascript: edumgrLink('Staff');" id="edumgr-link" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block">Staff</a></li>
                  <li class="list-item divider"></li>
                  <li class="list-item"><a href="javascript: edumgrLink('Student');" id="edumgr-link" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block">Student</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo"> &#160; St. Murumba College</a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item @@blog">
              <a class="nav-link" href="blog.php">BLOG</a>
            </li>
            <li class="nav-item @@gallery">
              <a class="nav-link" href="gallery.php">GALLERY</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="images/image-3.jpg">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">St. Murumba College, Jos Plateau State</h2>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Was founded in September, 2019. It is owned and managed by the Institute of the Sisters of the Eucharistic Heart of Jesus.</p>
            <a href="admission.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">VISION</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">To foster young adults into competent leaders who will be sound in character, morals and academic standing.</p>
            <a href="admission.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">MISSION</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">To give qualitative and all round education to young boys and girls so as to develop a service of purpose and awareness of their roles as members of the society.</p>
            <a href="admission.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/image-8.jpg" alt="banner-feature">
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Vision</h3>
            <p class="text-justify">To foster young adults into competent leaders who will be sound in character, morals and academic standing.</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-target mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Mission</h3>
            <p class="text-justify">To give qualitative and all round education to young boys and girls so as to develop a service of purpose and awareness of their roles as members of the society.</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Spirituality</h3>
            <p class="text-justify">EHJMCK offers the students various  opportunities to grow in their spiritual, moral and prayer life. Masses, confessions, bible study, faith formation, pious society activities, retreats etc are all avenues through which their spirituality is enhanced</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Admission</h3>
            <p class="text-justify">St. Murumba College, Jos admits students from within and outside the country and prepares them for excellence in all ramifications.<br>
            Every admission is by merit through entrance and interview examinations duly conducted by the school authority.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->


<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h6 class="text-white font-secondary mb-0">Enroll into our School</h6>
        <h2 class="section-title text-white">Our Admssion is currently ongoing</h2>
        <a href="admission.html" class="btn btn-secondary">Apply Now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->



<!-- about us -->
<section class="section pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">WHO WE ARE</h2>
        <p class="text-justify">St. Murumba collage then called blessed murumba collage came into existence in1959. The school is rated of the top secondary school in the whole of plateau state. the school was established out of the burning desires by the catholic community in Jos to see to the advanced education of her young boys who were graduating from elementary school. Many top personnel in the society today are products of the St. murumba collage.
        </p>
        <a href="about.html" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/image-6.jpg" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- gallery -->
<section class="gallery5 mbr-gallery cid-sq1ICVf6CT pt-0" id="gallery5-g">
  
  <div class="container">
      <div class="row mbr-gallery mt-4 justify-content-center">
          <div class="col-12">
            <h2 class="section-title">Gallery</h2>
          </div>

          <?php   
              $getImages = $sl->selectNotThereLimitedandOrder('gallery','status','deleted','id','DESC',0,5);

              if ($getImages) {

                $imageID = array();
                $imageTitle = array();
                $imageName = array();
                $imageDate = array();
                while ($value = $getImages->fetch_assoc()) {
                  array_push($imageID, $value['id']);
                  array_push($imageTitle, $value['title']);
                  array_push($imageName, $value['image']);
                  array_push($imageDate, $value['added_date']);
                }
             for ($i=0; $i < count($imageID); $i++) {  ?>

          <div class="col-12 col-md-6 col-lg-4 item gallery-image">
              <div class="item-wrapper" data-toggle="modal" data-target="#sq1IRbKlgS-modal">
                  <img class="w-100" src="images/gallery/<?php echo $imageName[$i]; ?>" alt="" data-slide-to="<?php echo $i; ?>" data-target="#lb-sq1IRbKlgS">
                  <div class="icon-wrapper">
                      <span class="ti-search"></span>
                  </div>
              </div>
              <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                  <?php echo $imageTitle[$i]; ?>
              </h6>
          </div>
        <?php } ?>
      </div>

      <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sq1IRbKlgS-modal">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <div class="carousel slide carousel-fade" id="lb-sq1IRbKlgS" data-interval="5000">
                          <div class="carousel-inner">
                            <?php  for ($j=0; $j < count($imageID); $j++) {  ?>
                              <div class="carousel-item <?php
                                    if ($j == 0) {
                                      echo 'active';
                                    }
                              ?>">
                                  <img class="d-block w-100" src="images/gallery/<?php echo $imageName[$j]; ?>" alt="Gallery Image">
                              </div>
                            <?php } ?>

                          </div>
                          <ol class="carousel-indicators">
                              <?php  
                                for ($k=0; $k < count($imageID); $k++) {  
                                    echo '<li data-slide-to="'.$k.'"'; 
                                    if ($k == 0) {
                                      echo 'class="active"';
                                    }
                                    echo' data-target="#lb-sq1IRbKlgS"></li>
                                    ';
                                }
                              ?>

                          </ol>
                          <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span>
                          </a>
                          <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" href="#lb-sq1IRbKlgS">
                              <span class="ti-angle-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next carousel-control" role="button" data-slide="next" href="#lb-sq1IRbKlgS">
                              <span class="ti-angle-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-12 text-center">
        <a href="gallery.php" class="btn btn-primary btn-sm">see more</a>
      </div>
    <?php }else { ?>
      <div class="row">
        <div class="col-12 card">
          <div class="card-body text-center">No Image(s) found in Gallery</div>
        </div>
      </div>
    <?php } ?>

      </div>
  </section>
      
<!-- /gallery -->


<!-- blog -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest News</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <?php

            $getBlog = $sl->selectNotThereLimitedandOrder('blog_post','status','deleted','id','DESC',0,2);
            if ($getBlog) {
              while ($row = $getBlog->fetch_assoc()) {
      ?>

        <!-- blog post -->
        <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
          <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/blog/img/cropped/<?php  echo $row['image'] ?>" alt="Post thumb">
            <div class="card-body">
              <ul class="list-inline mb-3">
                <li class="list-inline-item mr-3 ml-0"><?php  echo $fm->DateFormat3($row['added_date']) ?></li>
                <li class="list-inline-item mr-3 ml-0">By EHJMCK</li>
              </ul>
              <a href="blog-single.php?blog=<?php  echo $row['id'] ?>">
                <h4 class="card-title"><?php  echo $row['title'] ?></h4>
              </a>
              <p class="card-text"><?php echo substr(str_replace('\r\n', '',  htmlspecialchars_decode($row['details'])), 0,200); ?> ... </p>
              <a href="blog-single.php?blog=<?php  echo $row['id'] ?>" class="btn btn-primary btn-sm">read more</a>
            </div>
          </div>
        </article>
      <?php } }else{ ?>
          <article class="col-12">
            <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
              <div class="card-body">
                  <h4 class="card-title text-center">No News Yet. Check Back Later!!!</h4>
              </div>
            </div>
          </article>
      <?php } ?>
  
    </div>
  </div>
</section>
<!-- /blog -->

<!-- footer -->
<footer>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom" style="padding-top: 50px; padding-bottom: 20px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-6 mb-5 mb-lg-0 text-center">
          <!-- logo -->
          <a class="logo-footer" href="home.php"><img class="img-fluid mb-4" src="images/logo1.png" alt="logo" width="100px"></a>
        </div>
        <!-- company -->
        <div class="col-lg-3 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-4">ADDRESS</h4>
          <ul class="list-unstyled">
            <li class="mb-2">Zaria Bye-Pass Road<br>Jos - Plateau State, Nigeria</li>
            <li class="mb-2">P.O Box<br>658 Zaria Road<br>Jos - Plateau State, Nigeria</li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-3 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-4">CONTACT</h4>
          
          <h6 class="text-white mb-2">Phone</h6>
          <ul class="list-unstyled mb-3">
            <li class="mb-2"><a href="tel:+2349135523749" class="text-color">+234 (0) 913 552 3749</a></li>
            <li class="mb-2"><a href="tel:+2349135548688" class="text-color">+234 (0) 913 554 8688</a></li>
            <li class="mb-2"><a href="tel:+2348160577800" class="text-color">+234 (0) 816 057 7800</a></li>
          </ul>

          <h6 class="text-white mb-2">Email</h6>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="mailto:info@smc-sch.org" class="text-color">info@smc-sch.org</a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-3 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-4">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-2 "><a class="text-color" href="home.php">Home</a></li>
            <li class="mb-2 "><a class="text-color" href="admission.html">Admission</a></li>
            <li class="mb-2 "><a class="text-color" href="about.html">About</a></li>
            <li class="mb-2 "><a class="text-color" href="blog.php">Blog</a></li>
            <li class="mb-2 "><a class="text-color" href="gallery.php">Gallery</a></li>
            <li class="mb-2 "><a class="text-color" href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 <!-- copyright -->
  <div class="copyright pt-3 bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0 text-white">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © St. Murumba College, Jos</p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/" target="_blank"><i class="ti-facebook text-warning"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com" target="_blank"><i class="ti-twitter-alt text-warning"></i></a></li>
          </ul>
        </div>
        <div class="col-12">
          <p class="float-right text-white">Managed By: <span class="text-info">i-Tec247 Limited</span></p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="plugins/google-map/gmap.js"></script>


<!-- Main Script -->
<script src="js/script.js"></script>

<script>
  $(function(){
      
      // $("#gallery-content").load("gallery-content.php");
      $("#blog-content").load("blog-list.php");

  });
  </script>
  <script type="text/javascript">
  function edumgrLink(user) {
    window.open('https://login.edumgr.online/?user='+user+'&url='+encodeURIComponent(location.href)+'&site=St Murumba College Jos', '_blank');
  }
</script>


</body>
</html>