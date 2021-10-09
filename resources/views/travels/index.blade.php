@extends('layouts.main')

@section('title', 'Travel Agency | Transports')


@section('title_page')
<h1 class="my-5 text-center">Travels</h1>
@endsection

    @section('content')
    <section id="travels">
        <ul>
            @forelse ($travels as $travel)
            <li>{{ $travel['destination'] }}</li>    
            <li>{{ $travel['price'] }}</li>
            <li>Departure: {{ $travel['departure_date'] }}</li>    
            <li>Landing: {{ $travel['return_date'] }} }}</li>    
            @empty
            <h1>Non ci sono viaggi disponibili</h1>    
            @endforelse
            
        </ul>
    </section>

@endsection