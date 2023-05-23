@extends('layouts.admin')

@section("content")

<h1>{{$project->title}}</h1>
<p class="w-75">{{$project->content}}</p>

<a href="{{route("admin.projects.index")}}" type="button" class="btn btn-primary">Torna ai Projects</a>

@endsection