<?php include"sidebar.php" ?>
<div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
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

                             
                                            " class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href=""><?php echo $_SESSION['username']; ?></a>
                                    <span>on <?php echo $d['time'] ;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php echo $d['status']; ?>
                        </div>
                        <div class="videoWrapper">
                            <img src="<?php echo $d['file'];  ?>" width="50"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                        <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>



                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src=""<?php 
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

                             
                                            " class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href=""><?php echo $_SESSION['username']; ?></a>
                                    <span>on<?php echo $d['time'] ;?></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <?php echo $d['status']; ?>
                        </div>
                        <img src="<?php echo $d['file'];  ?>" width="20" class="img-responsive">
                        <div class="view-all-comments"><i class="fa fa-comments-o"></i> Be the first to comment</div>
                        <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                










                <div class="timeline-block">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <a href="" class="pull-left">
                                    <img src="images/people/50/guy-2.jpg" class="media-object">
                                </a>
                                <div class="media-body">
                                    <a href="#" class="pull-right text-muted"><i class="icon-reply-all-fill fa fa-2x "></i></a>
                                    <a href="">Jonathan</a>
                                    <span>on 15th January, 2014</span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="boxed">
                                <a href="#" class="h4 margin-none">Vegetarian Pizza</a>
                                <div class="rating text-left">
                                    <span class="star"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                    <span class="star filled"></span>
                                </div>
                                <div class="media">
                                    <a href="#" class="media-object pull-left">
                                        <img src="images/food1.jpg" alt="" width="80" />
                                    </a>
                                    <div class="media-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor impedit ipsum laborum maiores tempore veritatis....</p>
                                    </div>
                                </div>
                                <ul class="icon-list">
                                    <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                    <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                                    <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                </ul>
                            </div>
                        </div>
                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                        <ul class="comments">
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/50/guy-5.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Bill D.</a>
                                        <span>Hi Mary, Nice Party</span>
                                        <div class="comment-date">21st September</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/50/woman-5.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Mary</a>
                                        <span>Thanks Bill</span>
                                        <div class="comment-date">2 days</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="images/people/50/guy-5.jpg" class="media-object">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="comment-author">Bill D.</a>
                                        <span>What time did it finish?</span>
                                        <div class="comment-date">14 min</div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" />
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>