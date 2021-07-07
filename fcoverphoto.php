<div class="cover overlay">

              <img src="<?php
                 
               if (empty($dataiid['cover'])) {
               	echo"images/profile-cover.jpg";
               } 
                else{
                echo $dataiid['cover'];
              }?>" alt="cover" />
                
            </div>
