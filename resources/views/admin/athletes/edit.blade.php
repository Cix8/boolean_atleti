@extends('layouts.dashboard')

@section('content')

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('admin.athletes.update') }}" method="POST" enctype="multipart/form-data"> 
    @method('PUT')
    @csrf
    <div class="form-group">
      <label for="name">Nome Atleta</label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ? old('name') : $athlete->name }}" > 
    </div>
    <div class="form-group">
        <label for="genre">Genere Atleta</label>
        <select class="form-control" id="genre" name="genre"> 
        <option value="Donna">Donna</option>
        <option value="Uomo">Uomo</option>
        </select>
    </div>

    <div class="form-group">
      <label for="nationality_id">Nazionalità</label>
      <select class="form-control" id="nationality_id" name="nationality_id"> 
        <option value="">Nessuna</option>
        @foreach ($nationalities as $nationality)
        <option value="{{ $nationality->id }}" {{ old('nationality_id') == $nationality->id ? 'selected' : '' }} > {{ $nationality->name }}</option>
            
        @endforeach
    </select>
      </div>

      <div> 
        <h4>Categorie</h4>
        @foreach ($categories as $category)
        <div class="form-check">
          <input name="categories[]" class="form-check-input" type="checkbox" value="{{ $category->id }}" id="category-{{$category->id}}">
          <label class="form-check-label" for="category-{{$category->id}}"  {{ in_array( $category->id, old('categories', [])) ? 'checked' : '' }}  >
            {{$category->name}}, {{$category->discipline}}, {{ $category->genre }}
          </label>
        </div>
        @endforeach

      </div>

    {{-- <div >
      <div class="form-group">
        <label for="content">Contenuto</label>
        <input type="text" class="form-control" id="content" name="content" value="{{ old('content') }}"> 
    </div>
  </div>

  <div>
    <label for="image">Immagine</label>
    <input type="file" id="image" name="image">
  </div> --}}

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


@endsection