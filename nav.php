<nav class="navbar" id="navigation">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(window).scroll(
			function(){
				if($(this).scrollTop() > 123) {
					$('#navigation').addClass('navbar-fixed-top');
				}
				else {
					$('#navigation').removeClass('navbar-fixed-top');
				}
			}
		);
	</script>
	<div class="nav-grid">
		<li class="navi"><a href="<?php echo "profile.php?username=".$username?>"><?php echo "@".$username?></a></li>
		<li class="navi"><a href="logout.php">Logout</a></li>
	</div>
</nav>