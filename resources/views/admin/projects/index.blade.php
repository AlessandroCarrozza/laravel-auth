@extends('layouts.admin')

@section("content")
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        {{-- <th scope="col">Contenuto</th> --}}
        <th scope="col">Slug</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($projects as $project)
      <tr>
        <th scope="row">{{$project->id}}</th>
        <th scope="row">{{$project->title}}</th>
        {{-- <td>{{$project->content}}</td> --}}
        <td>{{$project->slug}}</td>
        <td>
            <a href="{{route("admin.projects.show", ["project" => $project->slug])}}" type="button" class="btn btn-primary">Vedi</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection