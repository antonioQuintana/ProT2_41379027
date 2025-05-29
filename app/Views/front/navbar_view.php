<!--Barra de navegacion-->
    <nav
      class="navbar navbar-expand-lg"
      style="background-color: #00a800"
      data-bs-theme="dark"
    >
      <div class="container-fluid">
        <div>
          <a class="navbar-brand" href="#">
            <img src="assets/img/Logo-1.png" height="50" />
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href='index'>Principal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href='registrarse'> Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href='ingresar'> Ingresar</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Más info
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">¿Quienes sómos?</a></li>
                <li>
                  <a class="dropdown-item" href="#">Acerca de nosotros</a>
                </li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Contactá con nosotros</a>
                </li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <!--Fin de barra-->