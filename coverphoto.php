<div class="cover overlay">

              <img src="<?php
                 
               if (empty($data['cover'])) {
               	echo"images/profile-cover.jpg";
               } 
                else{
                echo $data['cover'];
              }?>" alt="cover" />
                <a href="user-private-profile.php" class="btn btn-cover"><i class="fa fa-pencil fa-fw"></i></a>
            </div>
