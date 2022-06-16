@extends('layouts.app')
@section('content')
<a name="" id="" class="btn btn-primary" href="{{route('games.create')}}" role="button">add new game</a>
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>thumb</th>
            <th>cover image</th>
            <th>description</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>

    @foreach($games as $game)
        <tr>
            <td scope="row">{{$game->id}}</td>
            <td>{{$game->title}}</td>
            <td><img width="60px" height="60px" src="{{$game->thumb}}" alt=""> </td>
            <td><img width="60px" height="60px" src="{{$game->cover_image}}" alt=""></td>
            <td>{{$game->description}}</td>

            <td><a href="{{route('games.show', $game)}}">View</a> - Edit -Delete</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection
