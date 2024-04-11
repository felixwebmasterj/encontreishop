<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Encontrei Shop - Achadinhos da shoppe</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">  
  <link rel="stylesheet" type="text/css" href="css/global.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="js/data.js"></script>	
</head>
<body>
<nav class="navbar bg-nav shadow ">
  <div class="container-fluid">    
    <button class="navbar-toggler px-0 border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand pe-none" href="#" tabindex="-1" aria-disabled="true"><img src="img/logo.png" width="150"></a>
    <a href="##" class="lh-1">
    	<img src="img/instagram.svg" width="26" />
    </a>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header bg-nav">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" width="170"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
<!-- ITENS MENU -->
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item border-bottom">
            <a class="nav-link" href="#">
            	<div class="row">
            		<div class="col-11">Utensílios de Cozinha</div>
            		<div class="col-1"><i class="bi bi-chevron-right"></i></div>
            	</div> 	
            </a>
          </li>
          <li class="nav-item border-bottom">
            <a class="nav-link" href="#">
            	<div class="row">
            		<div class="col-11">Copos e Canecas</div>
            		<div class="col-1"><i class="bi bi-chevron-right"></i></div>
            	</div> 	
            </a>
          </li> 
          <li class="nav-item border-bottom">
            <a class="nav-link" href="#">
            	<div class="row">
            		<div class="col-11">Garrafas de Água e Acessórios</div>
            		<div class="col-1"><i class="bi bi-chevron-right"></i></div>
            	</div> 	
            </a>
          </li>
          <li class="nav-item border-bottom">
            <a class="nav-link" href="#">
            	<div class="row">
            		<div class="col-11">Jogos Americanos e Descanso de Copos</div>
            		<div class="col-1"><i class="bi bi-chevron-right"></i></div>
            	</div> 	
            </a>
          </li>
        </ul> 
      </div>
    </div>
  </div>
</nav>
<div class="container-fluid px-0 ">
	<!-- PESQUISAR -->

    <div class="input-group w-100">
  		<input type="text" id="pesquisar" class="form-control rounded-0" placeholder="O que você está procurando?" aria-label="Recipient's username" aria-describedby="button-addon2">
 
      <button type="submit" class="btn btn-outline-primary rounded-0" type="button" id="pesquisar-btn" >
  			<svg xmlns="http://www.w3.org/2000/svg" width="35" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
  			</svg>
		</button> 
	</div>	


</div>

<div id="bannersite" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#bannersite" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>    
    <button type="button" data-bs-target="#bannersite" data-bs-slide-to="1" aria-label="Slide 2"></button>    
    <button type="button" data-bs-target="#bannersite" data-bs-slide-to="2" aria-label="Slide 3"></button>    
    <button type="button" data-bs-target="#bannersite" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="img/banner1.png" class="d-block w-100 " alt="...">
    </div>
   

  </div>
</div>
<div class="container-fluid d-flex justify-content-center p-2 bg-nav text-light">Todos os Produtos</div>

<!-- ITENS LISTA -->
<main id="mainpg" class="container mt-5">
  	<div id="loading"><img src="https://i.stack.imgur.com/FhHRx.gif"></div>
</main>


<footer class="bg-dark text-light mt-5">
	<div class="container p-4">
		<div class="row justify-content-center text-center p-1">Encontrei Shop - 2024</div>
		<div class="row justify-content-center text-center p-1">Este é um site com variedade de produtos de marketplaces renomados com links de afiliados.</div>
	</div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
const myCarouselElement = document.querySelector('#bannersite')
const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 3000,
  touch: true,
  wrap: true
})
</script>

</body>
</html>