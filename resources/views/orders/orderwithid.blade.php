@extends('layouts.app')

@section('content')
<h1>Tilaa kuusi id {{$kuusi->id}}</h1>
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
            {{Form::label('email', 'Sähköpostiosoite')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Sähköpostiosoite'])}}
        </div>
        <div class="form-group">
            {{Form::label('phonenumber', 'Puhelinnumero')}}
            {{Form::text('phonenumber', '', ['class' => 'form-control', 'placeholder' => 'Puhelinnumero'])}}
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
        <div hidden>
            {{ Form::hidden('kuusi_id', $kuusi->id) }}
        </div>    
        <div hidden>
            {{ Form::hidden('price', $kuusi->price) }}
        </div>       
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection