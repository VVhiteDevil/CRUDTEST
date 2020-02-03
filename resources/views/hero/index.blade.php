@extends('layout')

@section('content')
<div class="container">
    <h3>My heroes</h3>
    <a href="{{ route('hero.create')}}" class="btn btn-success">Create</a>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>SuperHero Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                @foreach ($hero as $hero)
                    <tr>
                        <td>{{$hero->id}}</td>
                        <td>{{$hero->suname}}</td>
                        <td>
                            <a href="{{ route('hero.show', $hero->id)}}">
                                <i class="glyphicon glyphicon-eye-open">Open</i>
                            </a>
                            <div class="glyphicon glyphicon-edit" style="display:block">
                                <a href="{{ route('hero.edit', $hero->id)}}">Edit</a>
                            </div>
                            {!! Form::open(['method' => 'DELETE',
                                'route' => ['hero.destroy', $hero->id]]) !!}
                                <button onclick="return confirm('Are you sure?')">
                                    <i class="glyphicon glyphicon-remove">Delete</i>
                                </button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection