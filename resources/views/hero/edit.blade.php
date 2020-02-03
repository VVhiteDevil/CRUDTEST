@extends('layout')

@section('content')

@include('errors')

<div class="container">
    <h3>Edit Hero # - {{$hero->id}} </h3>
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['route' => ['hero.update', $hero->id], 'method'=>'PUT']) !!}
            <div class="form-group">
                <a>Superhero Name</a>
                <input type="text" class="form-control" name="suname" value="{{ old('suname' )}}" />
                <br>
                <a>Real Name</a>
                <input type="text" class="form-control" name="relname" value="{{ old('relname') }}" />
                <br>
                <a>Birthplace</a>
                <textarea name="birthplace" id="" cols="15" rows="5" class="form-control">{{old('birthplace')}}</textarea>
                <br>
                <a>Superpowers</a>
                <textarea name="superpowers" id="" cols="15" rows="5" class="form-control">{{old('superpowers')}}</textarea>
                <br>
                <a>Phrase</a>
                <textarea name="phrase" id="" cols="15" rows="5" class="form-control">{{old('phrase')}}</textarea>
                <br>
                <button class="btn btn-success">Submit</button>
            </div>
            {!! Form::close() !!}    
        </div>
    </div>
</div>
@endsection