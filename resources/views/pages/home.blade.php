@extends('layouts.app')

@section('title', 'DC Comics | Home')
@section('content')
<main>
    <div class="jumbo">
        <div class="container jumbo-main">
          <button>current series</button>
        </div>
     </div>
      <div class="bottom-part">
        <div class="container bottom-part-main">
          <div class="comics-main">

           @foreach ($comics as $comic )

            <div class="comic">
              <img
                src="{{$comic["thumb"]}}"
                alt="comic cover"
              />
              <h4>{{$comic["title"]}}</h4>
          </div>
          @endforeach

        </div>
        <div class="load-more">
            <button class="btn-load-comics">load more</button>
          </div>
      </div>
</main>
@endsection
