@extends('layouts.app')
@section('page-title', 'Home')
@section('main-content')
<main>

    <div class="background-jumbotron">
        <div class="container">
            <div class="buttonCurrentSeries">
                <button>
                    CURRENT SERIES
                </button>

            </div>
        </div>
    </div>

    <div class="bg-black">
        <div class="container pt-4">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 g-3 ">
                        <img class="h-75 w-100" src="{{ $comic['thumb'] }}" alt="">

                        <div class="text-white pt-3">
                            <p> {{ $comic['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="buttonLoad">
                <button>
                    LOAD MORE
                </button>

            </div>

        </div>

    </div>

    <section class="sectionMainBottom">
        <div class="container py-4">
            <div class="infoMain">
                <ul class="d-flex justify-content-around">
                @foreach ($mainicones as $icone)
                    <li class="d-flex align-items-center card-icone">
                        <img src="{{ Vite::asset($icone['image'])}}" alt="{{$icone['text']}} h-25">

                        <a href="{{$icone['url']}}" class="text-decoration-none text-white ps-2">
                            {{ $icone['text'] }}
                        </a>
                    </li>
                @endforeach

                </ul>

            </div>

        </div>

    </section>

</main>
@endsection


