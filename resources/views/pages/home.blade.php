@extends('layouts.main-layout')

@section('content')
    <div class="container">
        <h1>People</h1>
        <ul>
            @foreach ($people as $person) 
                <li>
                    <div>
                        <h5 class="d-inline">Person: </h5>{{ $person -> name }}<br>
                        <h5 class="d-inline">Email: </h5>{{ $person -> mail }}<br>
                        <h5 class="d-inline">Phone: </h5> {{ $person -> personDetail -> phone }}<br>
                        <h5 class="d-inline">Address: </h5>{{ $person -> personDetail -> address }}<br>
                    </div>
                    @if ($person -> posts -> count() > 0)
                        <h3 class="my-3">Posts: {{ $person -> posts -> count() }}</h3>
                        <ul>
                            {{-- Tramite la relazione diretta, richiamo la funzione "posts" dal model "Person"--}}
                            @foreach ($person -> posts as $post)
                                <li>
                                    <div class="py-2">
                                        <h5 class="d-inline">Title: </h5>{{ $post -> title}}<br>
                                        <h5 class="d-inline">Body: </h5>{{ $post -> body }}<br>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <hr>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection