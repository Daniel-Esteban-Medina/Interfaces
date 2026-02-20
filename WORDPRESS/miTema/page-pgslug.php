<?php get_header(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Logo menú boostrap</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuPrincipal">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            Servicios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Diseño</a></li>
            <li><a class="dropdown-item" href="#">Desarrollo</a></li>
            <li><a class="dropdown-item" href="#">Marketing</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php get_footer(); ?>