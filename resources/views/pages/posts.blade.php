@extends('layouts.main-layout')

@section('head')
    <title>Posts</title>

@section('content')
    <div class="container">
        <h1>Posts</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <div>
                        <h2>{{ $post -> title }}</h2>
                        <h6>{{ $post -> body }}</h6>
                    </div>
                    <h4>User</h4>
                    <div>
                        {{-- Tramite la relazione inversa, richiamo la funzione "person" dal model "Post"--}}
                        <h5 class="d-inline">Person: </h5>{{ $post-> person -> name }}<br>
                        <h5 class="d-inline">Email: </h5>{{ $post-> person -> mail }}<br>
                        <h5 class="d-inline">Phone: </h5> {{ $post-> person -> personDetail -> phone }}<br>
                        <h5 class="d-inline">Address: </h5>{{ $post-> person -> personDetail -> address }}<br>
                    </div> 
                </li>
                <hr>
            @endforeach
        </ul>
    </div>
@endsection