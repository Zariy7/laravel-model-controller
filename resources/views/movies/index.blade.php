@extends('layouts.movies')

@section('movies-content')
    <div class="container my-5">
        <div class="row g-5">
            @foreach ($movies_db as $movie)
            <div class="col-3">
                <div>
                    {{ $movie['title'] }}
                </div>
                <div>
                    {{ $movie['original_title'] }}
                </div>
                <div>
                    {{ $movie['nationality'] }}
                </div>
                <div>
                    {{ $movie['date'] }}
                </div>
                <div>
                    {{ $movie['vote'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection