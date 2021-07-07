<?php include"sidebar.php" ?>
    



    
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
    <script id="chat-window-template" type="text/x-handlebars-template">
      
    </script>
    <div class="chat-window-container"></div>
    <div id="content">
        <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <?php include"bar.php" ?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                

                <!-- /.navbar-collapse -->
                </div>
        </nav>
        <div class="container-fluid">
            <?php include"coverphoto.php" ?>
            <div class="panel panel-default share">
                

                <!-- /input-group -->
                </div>
            
            <div class="row">
                <div class="col-md-6">

                    <!--Friends -->
                    
                <div class="panel panel-default">
                        <div class="panel-heading panel-heading-gray">
                            <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                            <i class="fa fa-info-circle"></i> About
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled profile-about">
                                 <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">First Name</span>
                                        </div>
                                        <div class="col-sm-8"><?php echo$data['first_name'] ?></div>
                                    </div>
                                </li>
                                 <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Email</span>
                                        </div>
                                        <div class="col-sm-8"><?php echo$data['email'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                        </div>
                                        <div class="col-sm-8"><?php echo$data['dob'] ?></div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Gender</span>
                                        </div>
                                        <div class="col-sm-8"><?php echo$data['gender'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-sm-4"><span class="text-muted">Lives in</span>
                                        </div>
                                        <div class="col-sm-8"><?php echo$data['location'] ?></div>
                                    </div>
                                </li>
                                <li>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <!--Friends -->
                    
                </div>
            </div>
            <div class="panel panel-default">
                
        </div>

        <!-- Footer -->
        <?php include"footer.php" ?>
</body>
</html>