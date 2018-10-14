@extends('layouts.app')

@section('content')
<a type="button" href="/cv_skelbimai/public" class="btn btn-primary float-right">Atgal</a>
<h1>{{$advert->name}}</h1>
<small>Įkelta : {{$advert->updated_at}}</small>
<br>
<br>
<h4 for="email">El. Paštas :</h4>
<h3>{{$advert->email}}</h4>
<h4 for="file">CV :</h4>
<a href="{{ asset('storage/upload/'.$advert->file)}}" download="{{$advert->file}}">{{$advert->file}}</a>

@endsection
