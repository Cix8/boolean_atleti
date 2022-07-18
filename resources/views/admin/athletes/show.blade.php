@extends('layouts.dashboard')
@section('content')

    <h1>{{$athletes->name}}</h1>
    {{-- @if ($post->cover)
    <img src="{{asset('storage/' . $post->cover )}}" alt="">
    @endif
    <p>Slug : {{$post->slug}}</p> --}}
    <span>{{$athletes->genre}}</span>

    <p> <strong> Categorie: </strong>
        @forelse ($categories as $category)
        <span>{{ $category->name }} </span>
        <span>{{ $category->discipline }} </span>
        <span>{{ $category->genre }} </span> {{$loop->last ? '' : ','}}
            
        @empty
            nessuno
        @endforelse
    
    
    </p>
{{-- 
   <a class="btn btn-primary" href="{{route('admin.athletes.edit ', ['athlete' => $athletes->id])}}" >Modifica</a> --}}


   <form action="{{ route('admin.athletes.destroy', ['athlete' => $athletes->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit" onclick="return confirm('Vuoi veramente cancellare questo atleta?')">Cancella</button>
    </form>

@endsection