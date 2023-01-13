@extends('layouts.admin')

@section('content')

<h1>Tags</h1>
<div class="text-end">
        <a class="btn btn-success" href="{{route('admin.tags.index')}}">Crea nuova tag</a>
</div>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Projects</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
                <tr>
                    <th scope="row">{{$tag->id}}</th>
                    <td>
                    {{$tag->name}}
                    </td>
                    
                    <td><a class="link-secondary" href="{{route('admin.tags.index', $tag->slug)}}" title="Edit Tag"><i class="fa-solid fa-pen"></i></a></td>
                    <td> <form action="{{route('admin.tags.destroy', $tag->slug)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-title="{{$tag->name}}"><i class="fa-solid fa-trash-can"></i></button>
                     </form>
                    </td>
                </tr>
                @endforeach

        </tbody>
    </table>
    @include('partials.admin.modal-delete')

@endsection