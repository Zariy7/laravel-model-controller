@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Homepage</h1>
        <a href="{{ route('movie_table') }}">
            <div class="btn btn-primary">
                Go To Movies
            </div>
        </a>
    </div>
</body>
@endsection