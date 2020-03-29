@extends('layouts.app')

@section('content')
    <h1>Kuuset on tiälä</h1>
    @if(count($kuuset) >0)
        @foreach($kuuset as $kuusi)
            <div class="well">
                <h3>{{$kuusi->description}}</h3>
                <p>{{$kuusi->price}}€</p>
            </div>
        @endforeach
    @else
        <p>Eipä ollunna kuusia myynnissä</p>
    @endif
@endsection