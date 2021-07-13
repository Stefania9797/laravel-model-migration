@extends('layout.app')
@section('title','HomePage')
@section('content')
<h1>I Nostri Pacchetti</h1>
    @foreach ($viaggi as $viaggio)
    <h2>{{$viaggio->nome_pacchetto}}</h2>
    <p>{{$viaggio->descrizione}}</p>
    <p><strong>Luogo di partenza: {{$viaggio->luogo_di_partenza}}</strong></p>
    <p><strong>Data di partenza: {{$viaggio->data_di_partenza}}</strong></p>
    <p><strong>Durata Viaggio: {{$viaggio->durata_giorni_di_viaggio}}</strong></p>
    <p><strong>Prezzo: {{$viaggio->price}} EURO</strong></p>
    @endforeach
@endsection