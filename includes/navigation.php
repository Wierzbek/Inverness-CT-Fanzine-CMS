<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inverness CT Fanzine - Admin Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="index.php">HOME</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION[ 'first_name' ]." ".$_SESSION[ 'last_name' ]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <!-- NEWS FEED-->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i>News Feed<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="./posts.php">View all posts</a>
                            </li>
                            <li>
                                <a href="posts.php?source=add_post">Add posts</a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Inverness CT - squad, results, fixtures -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#team_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Inverness CT<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="team_dropdown" class="collapse">
                            <li>
                                <a href="./squad.php">Squad</a>
                            </li>
                        </ul>
                    </li>
                    
                    <!-- Scottish Championship - Standings, Results, Fixtures -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#league_dropdown"><i class="fa fa-fw fa-arrows-v"></i>Scottish Championship<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="league_dropdown" class="collapse">
                            <li>
                                <a href="./standings.php">Standings</a>
                            </li>
                            <li>
                                <a href="standings.php?source=fixtures">Fixtures</a>
                            </li>
                            <li>
                                <a href="posts.php?source=live">Live Updates</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Users -->
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="users.php">View All</a>
                            </li>
                            <li>
                                <a href="users.php?source=add_user">Add user</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>