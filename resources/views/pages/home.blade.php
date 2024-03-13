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
      <div class="blue-stripe">
        <div class="card-container">
          <div  class="card-va">
            <figure>
              <img
                width="50"
                src="{{  Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                alt="icon-services"
              />
            </figure>
            <h4>Digital Comics</h4>
          </div>
          <div  class="card-va">
            <figure>
              <img
                width="50"
                src="{{  Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                alt="icon-services"
              />
            </figure>
            <h4>DC merchandise</h4>
          </div>
          <div  class="card-va">
            <figure>
              <img
                width="50"
                src="{{  Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                alt="icon-services"
              />
            </figure>
            <h4>comic shop locator</h4>
          </div>
          <div  class="card-va">
            <figure>
              <img
                width="50"
                src="{{  Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                alt="icon-services"
              />
            </figure>
            <h4>Subscription</h4>
          </div>
          <div  class="card-va">
            <figure>
              <img
                width="50"
                src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                alt="icon-services"
              />
            </figure>
            <h4>"DC power visa</h4>
          </div>
        </div>
      </div>
</main>
@endsection
