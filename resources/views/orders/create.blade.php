@extends('layouts.app')

@section('content')
    <h1>Tie tilluu</h1>
    {!! Form::open(['action' => 'OrderController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('firstname', 'Etunimi')}}
            {{Form::text('firstname', '', ['class' => 'form-control', 'placeholder' => 'Etunimi'])}}
        </div>
        <div class="form-group">
            {{Form::label('lastname', 'Sukunimi')}}
            {{Form::text('lastname', '', ['class' => 'form-control', 'placeholder' => 'Sukunimi'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Katuosoite')}}
            {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Katuosoite'])}}
        </div>

        <div class="form-group">
            {{Form::label('city', 'Kaupunki')}}
            {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Kaupunki'])}}
        </div>
        <div class="form-group">
            {{Form::label('postalcode', 'Postinumero')}}
            {{Form::text('postalcode', '', ['class' => 'form-control', 'placeholder' => 'Postinumero'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Lisätietoja')}}
            {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Lisätietoja'])}}
        </div>
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection