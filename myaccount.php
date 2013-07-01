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
		
		<br><br><br><br><br>
        <div class="site-container">
            <ul class="breadcrumb container-box">
                <li><a href="#">Home</a></li>
                <li class="active">My Account</li>
            </ul>
        </div>
        <div class="site-container">
            <div class="container entry-content about-us-page">
                <div class="row">
                    <div class="span12">
                        <h3 class="page-title">My Account</h3>
                    </div>
                    <div class="span12">
                        <form action="#">
						<input type="button" value="Create Sight" class="btn btn-primary">
						<input type="button" value="Create Tour" class="btn btn-primary">
						<input type="button" value="Create Service" class="btn btn-primary">
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
