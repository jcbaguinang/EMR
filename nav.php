
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
	<div class="nav-style nav-grid ">
		<li class="navi"><a style="color: white;" href="logout.php">Logout</a></li>
	</div>
</nav>