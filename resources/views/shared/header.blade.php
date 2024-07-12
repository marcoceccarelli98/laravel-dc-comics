<?php
$menu = [
    [
        'title' => 'Home',
        'link' => route('home'),
    ],
    [
        'title' => 'Characters',
        'link' => '', //route('characters')
    ],
    [
        'title' => 'Comics',
        'link' => route('comics.index'),
    ],
    [
        'title' => 'Movies',
        'link' => '', //route('movies')
    ],
    [
        'title' => 'Tv',
        'link' => '', //route('tv')
    ],
    [
        'title' => 'Games',
        'link' => '', //route('games')
    ],
    [
        'title' => 'Collectibles',
        'link' => '', //route('collectibles')
    ],
    [
        'title' => 'Videos',
        'link' => '', //route('videos')
    ],
    [
        'title' => 'Fans',
        'link' => '', //route('fans')
    ],
    [
        'title' => 'News',
        'link' => '', //route('news')
    ],
    [
        'title' => 'Shop',
        'link' => '', //route('shop')
    ],
];
?>


<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Simple header</span>
    </a>

    <ul class="nav nav-pills">

        @foreach ($menu as $voice)
            <li class="nav-item"><a href="{{ $voice['link'] }}" class="nav-link text-black">{{ $voice['title'] }}</a>
            </li>
        @endforeach


        {{-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li> --}}
    </ul>
</header>
{{-- <div class="container-big">
      <div class="mc-row">
        <div class="col-50">
            <img class="logo" src="{{ Vite::asset('resources/img/DC_Comics.png') }}" alt="DC Comics Logo">
        </div>
        <div class="col-50">
          <div class="categories">
            @foreach ($menu as $voice)
            <a href="{{ $voice['link'] }}">{{ $voice['title'] }}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}
