@extends('layouts.movies')

@section('movies-content')
    <div class="container my-5">
        <div class="row g-5">
            @foreach ($movies_db as $movie)
            <div class="col-3">
                <div class="border border-primary rounded bg-info p-1">
                    <div>
                        <span class="fw-bold">
                            Titolo:
                        </span>
                        {{ $movie['title'] }}
                    </div>
                    <div>
                        <span class="fw-bold">
                            Titolo Originale:
                        </span>
                        {{ $movie['original_title'] }}
                    </div>
                    <div>
                        @php
                            $nationalities = explode('/', $movie['nationality']);
                        @endphp
                        <span class="fw-bold">
                            Paese:
                        </span>
                        @if(in_array('american', $nationalities))
                            <span class="fi fi-us"></span>
                        @endif
                        @if(in_array('british', $nationalities))
                            <span class="fi fi-gb"></span>
                        @endif
                    </div>
                    <div>
                        <span class="fw-bold">
                            Rilascio:
                        </span>
                        {{ date("d-m-Y", strtotime($movie['date'])) }}
                    </div>
                    <div>
                        <span class="fw-bold">
                            Voto:
                        </span>
                        {{ $movie['vote'] }}/10
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection