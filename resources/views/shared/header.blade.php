
<header>
    <div class="container-big">
      <div class="mc-row">
        <div class="col-50">
            <img class="logo" src="{{ Vite::asset('resources/img/DC_Comics.png') }}" alt="DC Comics Logo">
        </div>
        <div class="col-50">
          <div class="categories">
            @foreach ($data['menu'] as $voice)
            <a href="{{ $voice['link'] }}">{{ $voice['title'] }}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </header>