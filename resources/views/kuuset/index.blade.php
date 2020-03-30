@extends('layouts.app')

@section('content')
    <h1>Kuuset on tiälä</h1>
    @if(count($kuuset) >0)
    <table>
        <tr>
            <th>Kuvaus</th>
            <th>Hinta</th>
            <th></th>
        </tr>
        @foreach($kuuset as $kuusi)
            <div class="well">
                    <tr>
                        <td>{{$kuusi->description}}</td>
                        <td>{{$kuusi->price}}€</td>
                        <td><a href="/orders/{{$kuusi->id}}" class="btn btn-primary">Tilaa {{$kuusi->id}}</a></td>
                    <tr>             
            </div>
        @endforeach
    @else
        <tr>
        <td>Eipä ollunna kuusia myynnissä</td>
        </tr>
    </table>
    @endif
@endsection