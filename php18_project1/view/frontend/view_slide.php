<div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php 
                      $n = 0;
                  foreach ($arr as $rows) {
                  ?>
                  <li data-target="#myCarousel" data-slide-to="<?php echo $n; ?>" class="active"></li>
                  <?php 
                        $n++;
                      }
                   ?>
                </ol>
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <?php
                          $i = 0;
                   foreach ($arr as $rows) {
                    $i++;
                     ?>
                  <div class="item <?php echo $i==1?"active":""; ?>"> <img src="<?php echo $rows["c_img"]; ?>" alt="<?php echo $rows["c_name"]; ?>"> </div>
                  <?php } ?>
                </div>
                
                <!-- Left and right controls --> 
              </div>