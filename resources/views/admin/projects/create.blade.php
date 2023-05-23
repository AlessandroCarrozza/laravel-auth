@extends('layouts.admin')

@section("content")

<form action="{{route("admin.projects.store")}}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{old("title")}}">

        @error("title")
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea class="form-control @error("content") is-invalid @enderror" placeholder="Inserisci contenuto" name="content" id="content" style="height: 100px">{{old("content")}}</textarea>
        
        @error("content")
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>

</form>

@endsection