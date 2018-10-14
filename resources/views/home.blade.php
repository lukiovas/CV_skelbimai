@extends('layouts.app')

@section('content')
<h1>CV skelbimai</h1>
<a type="button" href="/CV_skelbimai/public/adverts/create" class="btn btn-primary float-right">Įkelti skelbimą</a>

    <table class="table">
        @if (count($adverts) >= 1)
        <tr>
                <th>Vardas Pavardė</th>
                <th>El. Paštas</th>
                <th>Darbo sritis</th>
                <th>Skelbimas patalpintas</th>
                <th></th>

            </tr>
    
    <div class="well">
        
        @foreach($adverts as $advert)
                        <tr>
                            <td>{{$advert->name}}</td> 
                            <td>{{$advert->email}}</td>
                            <td>{{$advert->job_category}}</td>
                            <td>{{$advert->created_at}}</td>
                            <td><a href="/CV_skelbimai/public/adverts/{{$advert->id}}">Informacija apie skelbimą</a></td>   
                    </tr>          
        @endforeach      
    </div>
</table>

    {{$adverts->links()}}

    @else
        <p>Skelbimų nėra</p>
    @endif

@endsection
