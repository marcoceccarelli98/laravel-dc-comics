<?php 
      $menu = [
            [
                'title' => 'Home',
                'link' => route('home')
            ],
            [
                'title' => 'Characters',
                'link' => '' //route('characters')
            ],
            [
                'title' => 'Comics',
                'link' => route('comics.index')
            ],
            [
                'title' => 'Movies',
                'link' => '' //route('movies')
            ],
            [
                'title' => 'Tv',
                'link' => '' //route('tv')
            ],
            [
                'title' => 'Games',
                'link' => '' //route('games')
            ],
            [
                'title' => 'Collectibles',
                'link' => '' //route('collectibles')
            ],
            [
                'title' => 'Videos',
                'link' => '' //route('videos')
            ],
            [
                'title' => 'Fans',
                'link' => '' //route('fans')
            ],
            [
                'title' => 'News',
                'link' => '' //route('news')
            ],
            [
                'title' => 'Shop',
                'link' => '' //route('shop')
            ],
        ];
?>

<header>
    <div class="container-big">
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
  </header>