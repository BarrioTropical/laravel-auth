@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
    <p>{{$project->content}}</p>
    <img width="300" src="{{ asset('storage/' . $project->cover_image)}}">

@endsection