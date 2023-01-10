@extends('layouts.app')

@section('content')

<ul>
    @foreach ($projects as $project)
        <a class="btn btn-primary text-white btn-sm" href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->title}}</a>
    @endforeach
</ul>

@endsection