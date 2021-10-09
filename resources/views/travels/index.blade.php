@extends('layouts.main')

@section('title', 'Travel Agency | Transports')


@section('title_page')
<h1 class="my-5 text-center">Travels</h1>
@endsection

    @section('content')
    <section id="travels" class="d-flex justify-content-center">
        @forelse ($travels as $travel)
        <div class="my-5">
            <h3>{{ $travel['destination'] }}</h3>    
            <h4>{{ $travel['price'] }}</h4>
            <h6>Departure: {{ $travel['departure_date'] }}</h6>    
            <h6>Landing: {{ $travel['return_date'] }} }}</h6>    
            @empty
            <h1>Non ci sono viaggi disponibili</h1>    
        </div>
            @endforelse
            
    </section>

@endsection