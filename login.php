<?php ?>
<!DOCTYPE html>
<html>
    
<head>
<?php require_once 'inc.head.php'; ?>
</head>
    <body>
        <?php require_once 'inc.options.php'; ?>
        <?php require_once 'inc.topNaviBar.php'; ?>
        <?php require_once 'inc.accountStat.php' ?>
        <div class="container-box">
			<div class="container main-menu">
				<div class="navbar">
					<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-main">
						<div class="icon-container">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>
						<div class="title-menu">Caregory</div>
					</a>
					<div class="nav-collapse navbar-main collapse">
						<ul class="nav">
							<li class="dropdown">
								<a href="#" data-toggle="dropdown">Women</a>
								<div class="dropdown-menu span12">
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Clothing</a>
										<ul>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Knitwear</a></li>
											<li><a href="#">Jackets & Coats</a></li>
											<li><a href="#">Trousers & Leggings</a></li>
											<li><a href="#">Playsuits</a></li>
											<li><a href="#">Editors Choice</a></li>
											<li><a href="#">True Decadence</a></li>
											<li><a href="#">Cardigans</a></li>
										</ul>
									</div>
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Shoes</a>
										<ul>
											<li><a href="#">Party Shoes</a></li>
											<li><a href="#">Boots</a></li>
											<li><a href="#">High Heel</a></li>
											<li><a href="#">Wedge</a></li>
											<li><a href="#">Flats Shoes</a></li>
											<li><a href="#">Jeffrey Campbell</a></li>
										</ul>
									</div>
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Accessories</a>
										<ul>
											<li><a href="#">Scarves</a></li>
											<li><a href="#">Handbags</a></li>
											<li><a href="#">Hats</a></li>
											<li><a href="#">Belts & Scarves</a></li>
										</ul>
									</div>
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Be inspared</a>
										<ul>
											<li><a href="#">Disco disco</a></li>
											<li><a href="#">Standout slogans</a></li>
											<li><a href="#">Sports luxe</a></li>
											<li><a href="#">Monochrome</a></li>
										</ul>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown">Men</a>
								<div class="dropdown-menu span12">
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Be inspared</a>
										<ul>
											<li><a href="#">Disco disco</a></li>
											<li><a href="#">Standout slogans</a></li>
											<li><a href="#">Sports luxe</a></li>
											<li><a href="#">Monochrome</a></li>
										</ul>
									</div>
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Shoes</a>
										<ul>
											<li><a href="#">Party Shoes</a></li>
											<li><a href="#">Boots</a></li>
											<li><a href="#">High Heel</a></li>
											<li><a href="#">Wedge</a></li>
											<li><a href="#">Flats Shoes</a></li>
											<li><a href="#">Jeffrey Campbell</a></li>
										</ul>
									</div>
									<div class="dropdown-section pull-left">
										<a class="title" href="#">Clothing</a>
										<ul>
											<li><a href="#">Dresses</a></li>
											<li><a href="#">Knitwear</a></li>
											<li><a href="#">Jackets & Coats</a></li>
											<li><a href="#">Trousers & Leggings</a></li>
											<li><a href="#">Playsuits</a></li>
											<li><a href="#">Editors Choice</a></li>
											<li><a href="#">True Decadence</a></li>
											<li><a href="#">Cardigans</a></li>
										</ul>
									</div>
									<div class="dropdown-section promo pull-left">
										<a href="#"><img src="content/sample-benner-1.png" alt=""></a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, quam sunt tenetur eaque minima at distinctio officiis quis explicabo rem.</p>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<a href="#" data-toggle="dropdown">Footwear</a>
								<ul class="dropdown-menu one">
									<li><a href="#">Dresses</a></li>
									<li><a href="#">Knitwear</a></li>
									<li><a href="#">Jackets & Coats</a></li>
									<li><a href="#">Trousers & Leggings</a></li>
									<li><a href="#">Cardigans</a></li>
								</ul>
							</li>
							<li>
								<a href="#" data-toggle="dropdown">Jewelry</a>
							</li>
							<li>
								<a href="#" data-toggle="dropdown">Accessories</a>
							</li>
							<li>
								<a href="#" data-toggle="dropdown">Electronics</a>
							</li>
							<li>
								<a href="#" data-toggle="dropdown">Furniture</a>
							</li>
						</ul>
					</div>
					<form class="navbar-search pull-right" action="#" method="get">
						<input class="search-query" type="search" name="q"><button type="submit" class="search-button">&nbsp;</button>
					</form>
				</div>
			</div>
		</div>
        <div class="site-container">
            <div class="header-six-box">

            </div>
        </div>
        <div class="site-container">
            <ul class="breadcrumb container-box">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
        <div class="site-container">
            <div class="container entry-content">
                <div class="row">
                    <div class="span12">
                        <h1 class="page-title">Login or Create an Account</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="span6 new-costumers">
                        <h2>New guests</h2>
                        <p>By creating an account with our application, you will be able to find the information regarding Sri Lanka faster, 
                            these searches can be according to your interests, get to know the best places available with the recommendations and reviews of other guests.
                        </p>
                        <a href="create_account.php" class="btn btn-primary">Create an account</a>
                    </div>
                    <div class="span6 login">
                        <h2>Registered Customers</h2>
                        <p>If you have an account with us, please log in.</p>
                        <form action="#">
                            <label>Email Adress: <span class="required">*</span></label>
                            <input type="email" required title="Please provide an proper email address.">
                            <label>Password: <span class="required">*</span></label>
                            <input type="password">
                            <label class="checkbox-form">
                                <input id="remember" type="checkbox"> Remember me
                            </label>
                            <input type="submit" value="Login" class="btn btn-primary">
                            <div class="required-field pull-right">* Required Field</div>
                            <a href="#" class="forgot pull-right">Forgot Your Password?</a>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once 'inc.footer.php'; ?>
        <script src="js/localjquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.formstyler.js"></script>
        <script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
        <script src="js/jquery.touchSwipe.min.js"></script>
        <script src="js/jquery.cookie.js"></script>
        <script src="js/jquery.minicolors.js"></script>
        <script src="js/script.js"></script>
    </body>

</html>