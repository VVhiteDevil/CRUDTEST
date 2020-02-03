@extends('layout')

@section('content')

@include('errors')

<div class="container">
    <div class="row">
        <div class="cil-md-12">
        <h3>{{$hero->suname}}</h3>
        <h3>{{$hero->relname}}</h3>
            <p>
                {{$hero->birthplace}}
            </p>
            <p>
                {{$hero->superpowers}}
            </p>
            <p>
                {{$hero->phrase}}
            </p>
        </div>
    </div>
</div>
@endsection