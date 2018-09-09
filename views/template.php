<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DN | Distribuidora de Naturais</title>
		<link type="text/css" rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">



</head>
<body>

<section id="header" class="">

<div class="container-header-footer space-bt">

	<div class="logo"><img src="<?php echo BASE_URL; ?>/assets/images/logotipo-dn.png"></div>

	<div class="menu">

		<nav>

			<span class="abrir-nav">
            	<div class="mm_line"></div>
            	<div class="mm_line"></div>
            	<div class="mm_line"></div>
            </span>
				
			<div class="menu-header">
				<ul id="menu-principal" class="menu">
					<li><a>Home</a></li>
					<li><a href="<?php echo BASE_URL; ?>quemsomos">Quem Somos</a></li>
					<li><a>Produtos</a>
						<ul class="sub-menu">
							<?php foreach($menu as $menuitem): ?>
							<li><a href="<?php echo BASE_URL; ?>category/ver/<?php echo $menuitem['id'];?>"><?php echo $menuitem['name'] ?></a></li>
						<?php endforeach; ?>
						</ul>
					</li>
					<li><a href="<?php echo BASE_URL; ?>contato">Contato</a></li>
				</ul>

			</div>
            

		</nav>

	</div>

	



</div>



</section>

<div class="banner">
	<div class="slideshow" id="slideshow">
			        

		<div class="slideshowarea">
			<?php foreach ($lista as $item): ?>
			<div class="slide">
				<img src="<?php echo BASE_URL; ?>assets/images/uploads/banners/<?php echo $item['images']; ?>">
			</div>
			<?php endforeach; ?>
			
		</div>
		<div class="slidebullets">

			<?php foreach ($lista as $item): ?>
			<div class="bullets" onclick="mudarSlide(<?php echo $item['id']; ?>)"></div>

			<?php endforeach; ?>
		</div>
	</div>
</div>

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>	
 <script  src="<?php echo BASE_URL; ?>assets/js/main.js"></script>
 <script  src="<?php echo BASE_URL; ?>assets/js/slide.js"></script>

<section id="footer">
<div class="container-header-footer flex-end">

<div class="menu align-start">

		<nav>

			<span class="abrir-nav">
            	<div class="mm_line"></div>
            	<div class="mm_line"></div>
            	<div class="mm_line"></div>
            </span>

			<div class="menu-header">

				<ul id="menu-principal" class="menu">
					<li><a>Home</a></li>
					<li><a href="<?php echo BASE_URL; ?>quemsomos">Quem Somos</a></li>
					<li><a>Produtos</a>
						<ul class="sub-menu">
							<li><a href="#">ted</a></li>
						</ul>
					</li>
					<li><a href="<?php echo BASE_URL; ?>contato">Contato</a></li>
				</ul>


			</div>

		</nav>

	</div>

</div>
</section>

</body>
</html>