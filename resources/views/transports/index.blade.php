@extends('layouts.main')

@section('title', 'Travel Agency | Transports')


@section('title_page')
<h1 class="my-5 text-center">Transports</h1>
@endsection

@section('content')
    <section id="transports" class="d-flex justify-content-center">
        @forelse ($transports as $transport)
        <div class="my-5">
            <h3> Vehicle: {{ $transport['vehicle'] }}</h3>    
            @empty
            <h1>Nessun veicolo disponibile per il viaggio</h1>    
            
        </div>
        @endforelse
    </section>
@endsection