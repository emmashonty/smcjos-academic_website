<?php 
  include 'plugins/crud/classes/Selector.php';
  $sl = new Selector();
?>
<section class="gallery5 mbr-gallery cid-sq1ICVf6CT" id="gallery5-g">
    
    <div class="container">
        <div class="row mbr-gallery mt-4">
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
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
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
                                        <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close"><span class="fa fa-remove" aria-hidden="true"></span>
                                        </a>
                                        <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" href="#lb-sq1IRbKlgS">
                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next carousel-control" role="button" data-slide="next" href="#lb-sq1IRbKlgS">
                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
  