<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">

	&nbsp;&nbsp;<button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>&nbsp;&nbsp;

    <a href="/" class="navbar-brand mr-1">
    	<img class="img-fluid" alt="" src="/img/logo.png">
    </a>

    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
        <div class="input-group">
           <input type="text" class="form-control" placeholder="Search for...">
           <div class="input-group-append">
              <button class="btn btn-light" type="button">
              <i class="fas fa-search"></i>
              </button>
           </div>
        </div>
    </form>

    <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
    	<?php if(!isset($_SESSION["username"])) : ?>
				<li class="nav-item dropdown no-arrow osahan-right-navbar-user">

					<a href="#" class="nav-link dropdown-toggle user-dropdown-link" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="img/defaultAvatar.jpg" alt="PP"> Guest
					</a>

					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
						<a href="#" class="dropdown-item">Registrarse</a>
						<a href="#" class="dropdown-item">Iniciar sesión</a>
					</div>

				</li>
    	<?php endif; ?>
    </ul>

</nav>
