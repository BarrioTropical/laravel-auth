@extends('layouts.app')

@section('content')

<ul>
    @foreach ($projects as $$project)
        <li>{{$projects->title}}</li>
    @endforeach
</ul>

@endsection