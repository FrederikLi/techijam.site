<div class="header-top">
        <div class="container">
            <div class="sub"><p>Subscription service R7/day</p></div>
        </div>
</div>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area wow fadeInDown" data-wow-delay="500ms">
        <!-- Top Header Area -->
       <!--<div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        
                        <div class="logo">
                            <a href="index.php?page=home"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        
                        <div class="search-login-area d-flex align-items-center">
                           
                            <div class="login-area">
                                <a href="index.php?page=login"><span>Login</span><i class="fa fa-lock" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">
						
						<div class="logo">
                            <a href="index.php?page=home"><img src="img/core-img/logo.png" alt=""></a>
                        </div>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
						
                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
								
								<div class="login-area mobile-version">
                                <?php
                                  if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                                    echo '<a href="index.php?page=login"><span>Logout</span><i class="fa fa-lock" aria-hidden="true"></i></a>';
                                } else {
                                    echo' <a href="index.php?page=login"><span>Login</span><i class="fa fa-lock" aria-hidden="true"></i></a>';
                                }
                                    ?>
                           
								</div>
								
                                <ul>
                                    <li><a href="index.php?page=home">Home</a></li>
                                    <li><a href="index.php?page=games/game-room">Games</a>
                                   <li><a href="index.php?page=apps/social">Apps</a>
                                    <li><a href="index.php?page=music/music">Music</a></li>
                                    <li><a href="index.php?page=images/gamingwallpapers">Images</a></li>
                                     <li><a href="index.php?page=contact">Contact</a></li>
                                    <li><a href="index.php?page=terms">T&C</a></li>
                                </ul> 

						
						<div class="login-area desktop-version">
                            <?php
                                if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                                    echo '<a href="index.php?page=login"><span>Logout</span><i class="fa fa-lock" aria-hidden="true"></i></a>';
                                } else {
                                    echo' <a href="index.php?page=login"><span>Login</span><i class="fa fa-lock" aria-hidden="true"></i></a>';
                                }


                            ?>
                           
                        </div>
                    </nav>
            </div>
			</div>
        </div>
			</div>
		</div>
    </header>
    <!-- ##### Header Area End ##### -->