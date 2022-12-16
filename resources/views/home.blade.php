@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-center">Film</h1>
        <div class="row row-cols-6 my-5">
            @forelse ($movies as $movie)
                <div class="col-6">
                    <div class="cards m-4">
                        <div class="front-display ">
                            <div class="img-card">
                                <img src="{{ $movie->image }}" alt="{{ $movie->original_title }}">
                            </div>
                            <div class="back-display">
                                <div class="card-item">
                                    <div class="text-start">
                                        <h3>{{ $movie->title }}</h3>
                                        <h4>Titolo orignale:{{ $movie->original_title }}</h4>
                                    </div>
                                    <div class="flag ">
                                        <p> Nationality: {{ $movie->nationality }} </p>
                                    </div>
                                    <div class="star ">
                                        <p> Vote: {{ $movie->vote }} </p>
                                    </div>
                                    <div>
                                        <p> Date: {{ $movie->date }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p>No Films</p>
                </div>
            @endforelse
        </div>
    </div>
    </div>
    </div>
@endsection
