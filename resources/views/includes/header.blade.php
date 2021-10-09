<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid fs-3">
          <a class="navbar-brand fs-3" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('travels.index') }}">Travels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('transports.index') }}">Transports</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header> 