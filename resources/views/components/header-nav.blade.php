<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="">Lorembook</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        {{-- Link Home --}}
        <li class="nav-item active">
          <a class="nav-link active" href="">Home <span class="sr-only">(current)</span></a>
        </li>
        {{-- End Link Home --}}

        {{-- Link Profile --}}
        <li class="nav-item active">
          <a class="nav-link" href="">Profile</a>
        </li>
        {{-- End Link Profile --}}

        {{-- Link Pengaturan --}}
        <li class="nav-item active">
          <a class="nav-link" href="">Pengaturan</a>
        </li>
        {{-- End Link Pengaturan --}}

      </ul>

      {{-- Form Pencarian --}}
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      {{-- End Form Pencarian --}}

      {{-- Tombol Masuk --}}
      <a href="" class="btn btn-outline-primary my-2 my-sm-0">
        Masuk
      </a>
      {{-- End Tombol Masuk --}}
      
    </div>
  </nav>
</header>