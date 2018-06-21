<?php include"header.php" ?>
<div class="sidebar left hidden-xs">
        <div data-scrollable>
            <div class="sidebar-block">
                <div class="profile">
                     
                    <img src="<?php 
                                    if (empty($data['dp'])) {
                                                 $gen=$data['gender'];


                             if ($gen=="male") {
                                echo "images/people/110/mprofile.jpg" ;
                                 # code...
                             }
                           else{
                            echo"images/people/110/fprofile.jpg";
                             }
                                 } else{

                                  echo $data['dp'];
                                       }?>     

                             
                                            ?> " alt="people" class="img-circle" width="89" />
                   

                    <h4><?php echo $_SESSION['username']; ?></h4>
                </div>
            </div>
            <div class="sidebar-block">
                <div class="category">About</div>
                <ul class="list-about">
                    <li><i class="fa fa-map-marker"></i> <?php echo $data['location']; ?></li>
                    <li><i class="fa fa-link"></i> <?php echo $data['email'] ?>
                    </li>
                    <li><i class="fa fa-user"></i> <?php echo $data['first_name'];echo$data['last_name'] ;?>
                    </li>
                </ul>
            </div>
            <div class="sidebar-block">
                <div class="category">Photos</div>
                <div class="sidebar-photos">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place2.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/food1.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/food1.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place3.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place2.jpg" alt="people" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="images/place1.jpg" alt="people" />
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-xs">view all</a>
                </div>
            </div>
            
        </div>
    </div>






    <div class="sidebar right">
        <div class="chat-search">
            <input type="text" class="form-control" placeholder="Search" />
        </div>
        <ul class="chat-filter nav nav-pills ">
            <li class="active"><a href="#" data-target="li">All</a>
            </li>
            <li><a href="#" data-target=".online">Online</a>
            </li>
            <li><a href="#" data-target=".offline">Offline</a>
            </li>
        </ul>
        <ul class="chat-contacts">
            <li class="online" data-user-id="1">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Jonathan S.</div>
                            <small>"Free Today"</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="online away" data-user-id="2">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Mary A.</div>
                            <small>"Feeling Groovy"</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="online" data-user-id="3">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <span class="status"></span>
                            <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Adrian D.</div>
                            <small>Busy</small>
                        </div>
                    </div>
                </a>
            </li>
            <li class="offline" data-user-id="4">
                <a href="#">
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                        </div>
                        <div class="media-body">
                            <div class="contact-name">Michelle S.</div>
                            <small>Offline</small>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>