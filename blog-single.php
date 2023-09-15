<?php 
  include 'plugins/crud/lib/Database.php';
  include 'plugins/crud/classes/Selector.php';
  include 'plugins/crud/classes/Counter.php';
  include 'plugins/crud/classes/Updater.php';
  $fm = new Format();
  $sl = new Selector();
  $ct = new Counter();
  $ud = new Updater();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Blog || EHJMC</title>

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
        <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logo"> &#160; St. Murumba College, Jos</a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item active">
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
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/image-8.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-white font-secondary" href="@@page-link">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blogs -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <!-- blog post -->
      <?php
        if (isset($_GET['blog'])) {
          $blog = intval($_GET['blog']);

          $viewers = $ud->insertBlogView($blog);

          $getBlog = $sl->selectById('blog_post',$blog);
            // $getBlog = $sl->selectNotThereLimitedandOrder('blog_post','status','deleted','id','DESC',0,2);
            if ($getBlog) {
              $row = $getBlog->fetch_assoc();
      ?>

        <!-- blog post -->
        <article class="col-12">
          <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
            <img class="card-img-top rounded-0" src="images/blog/img/cropped/<?php  echo $row['image'] ?>" alt="Post thumb">
            <div class="card-body">
              <ul class="list-inline mb-3">
                <li class="list-inline-item mr-3 ml-0"><?php  echo $fm->DateFormat3($row['added_date']) ?></li>
                <li class="list-inline-item mr-3 ml-0">By EHJMCK</li>
              </ul>
              <a href="blog-single.html">
                <h4 class="card-title"><?php  echo $row['title'] ?></h4>
              </a>
              <p class="card-text"><?php echo str_replace('\r\n', '',  htmlspecialchars_decode($row['details'])); ?> </p>
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
<!-- /blogs -->

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
<script type="text/javascript">
  function edumgrLink(user) {
    window.open('https://login.edumgr.online/?user='+user+'&url='+encodeURIComponent(location.href)+'&site=St Murumba College Jos', '_blank');
  }
</script>

</body>
</html>