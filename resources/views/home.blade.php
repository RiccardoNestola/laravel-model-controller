@extends('layouts.app')

@section('main-content')


    <div class="container">
        <div class="row">
            @foreach ( $movies as $movie )
              
            
            <div class="col-12 col-md-6 col-lg-4 py-4">
                <div class="card text-center">
                    <div class="card-header">
                        {{ $movie->nationality}}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">{{ $movie->original_title}}</h5>
                      <p class="card-text">{{ $movie->title}}</p>
                      <p class="card-text">{{ $movie->date}}</p>
                      <a href="#" class="btn btn-primary">View Film</a>
                    </div>
                    <div class="card-footer text-muted">
                      Vote {{ $movie->vote}}
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
    </div>
    







@endsection

