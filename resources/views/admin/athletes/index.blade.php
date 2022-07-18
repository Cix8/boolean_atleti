@extends('layouts.dashboard')
@section('content')
   <h1>Lista Atleti</h1> 
   <div class="row row-cols-3">
    @foreach ($athletes as $athlete)
            <div class="col">
        <div class="card" style="width: 18rem;">
            {{-- <img class="card-img-top" src="{{ asset('storage/' . $post->cover ) }}" alt=""> --}}
            <div class="card-body">
              <h5 class="card-title">{{$athlete->name}}</h5>
              <p class="card-text">{{ $athlete->genre }}</p>
              {{-- @foreach ($categories as $category)
                  <span class="card-text">{{ $category->name }}</span>
                  <span class="card-text">{{ $category->discipline }}</span>
                  <span class="card-text">{{ $category->genre }}</span>
              @endforeach --}}
              
              <a href="{{route('admin.athletes.show', ['athlete' => $athlete->id])}}" class="btn btn-primary">Lista alteti</a>
            </div>
          </div>

    </div>
    @endforeach


   </div>
@endsection