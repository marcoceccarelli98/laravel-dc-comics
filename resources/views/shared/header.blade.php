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


<header>
    <div class="container-fluid container-lg">
        <div class="d-flex">
            <div class="col">
                <a href="/"
                    class="d-flex align-items-center mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img class="logo" src="{{ Vite::asset('resources/img/DC_Comics.png') }}" alt="DC Comics Logo">
                </a>
            </div>
            <div class="col d-flex justify-content-end">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">

                                {{-- MENU VOICES --}}
                                @foreach ($menu as $voice)
                                    <li class="nav-item">
                                        <a href="{{ $voice['link'] }}"
                                            class="nav-link text-black">{{ $voice['title'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
