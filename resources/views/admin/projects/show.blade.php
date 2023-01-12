@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
@if($project->category)
<small>{{$project->category->name}}</small>
@endif

    <p>{{$project->content}}</p>
    <img width="300" src="{{ asset('storage/' . $project->cover_image)}}">

@endsection