<?php 
  include 'plugins/crud/lib/Database.php';
  include 'plugins/crud/classes/Selector.php';
  $fm = new Format();
  $sl = new Selector();
  
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
 