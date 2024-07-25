<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="<?=base_url();?>" class="branding">
						<img src="<?=base_url();?>design/images/logo.png" alt="" class="logo">
						<h1 class="site-title">Emmanuel Missionary Baptist Church</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item <?=$home;?>"><a href="<?=base_url();?>">Homepage <small>About Us</small></a></li>
							<li class="menu-item <?=$pastor;?>"><a href="#">Pastors <small>About our Pastor</small></a></li>
							<li class="menu-item <?=$sermon;?>"><a href="seremons.html">Seremons <small>Radio Programs</small></a></li>
							<li class="menu-item <?=$events;?>"><a href="events.html">Events <small>Church Activities</small></a></li>
							<li class="menu-item <?=$gallery;?>"><a href="families.html">Gallery <small>Pictures</small></a></li>
							<li class="menu-item <?=$members;?>"><a href="#">Members <small>EMBC MEmbers</small></a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->