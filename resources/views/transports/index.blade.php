@extends('layouts.main')

@section('title', 'Travel Agency | Transports')


@section('title_page')
<h1 class="my-5 text-center">Transports</h1>
@endsection

@section('content')
    <section id="transports">
        <ul>
            @forelse ($transports as $transport)
            <li>{{ $transport['vehicle'] }}</li>    
            @empty
            <h1>Nessun veicolo disponibile per il viaggio</h1>    
            @endforelse
            
        </ul>
    </section>
@endsection