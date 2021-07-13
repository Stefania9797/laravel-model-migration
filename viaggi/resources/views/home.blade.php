@extends('layout.app')
@section('title','HomePage')
@section('content')
<h1>I Nostri Pacchetti</h1>
<div class="viaggi">
    @foreach ($viaggi as $viaggio)
    <div class="viaggio">
        <h2>{{$viaggio->nome_pacchetto}}</h2>
        <p>{{$viaggio->descrizione}}</p>
        <p><strong>Luogo di partenza: </strong>{{$viaggio->luogo_di_partenza}}</p>
        <p><strong>Data di partenza:</strong>{{$viaggio->data_di_partenza}}</p>
        <p><strong>Durata Viaggio:</strong> {{$viaggio->durata_giorni_di_viaggio}} Giorni</p>
        <p><strong>Prezzo:</strong> {{$viaggio->price}} EURO</p>
    </div>
    @endforeach
</div>
@endsection