<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('assets/logo.png')}}" width="200px" alt="logo"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hatchback
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">GRAND i10 NIOS</a></li>
              <li><a class="dropdown-item" href="#">All New i20</a></li>
              <li><a class="dropdown-item" href="#">i20 N Line</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sedan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Aura</a></li>
              <li><a class="dropdown-item" href="#">Verna</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SUV
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Exter</a></li>
              <li><a class="dropdown-item" href="#">Creta</a></li>
              <li><a class="dropdown-item" href="#">Tuscon</a></li>
              <li><a class="dropdown-item" href="#">Venue</a></li>
              <li><a class="dropdown-item" href="#">Venue N Line</a></li>
              <li><a class="dropdown-item" href="#">Alcazar</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('about-us')}}">About Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> 