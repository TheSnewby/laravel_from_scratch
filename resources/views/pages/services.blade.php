@extends('layouts.app')

@section('content')
    <h1>Services</h1>
    <div class="accordion" id="servicesAccordion">
    @foreach ($services as $category => $items)
        <div class="accordion-item">
        <h2 class="accordion-header" id="heading{{ $loop->index }}">
            <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapse{{ $loop->index }}"
                    aria-expanded="false"
                    aria-controls="collapse{{ $loop->index }}">
            {{ $category }} Services
            </button>
        </h2>
        <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse"
            aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#servicesAccordion">
            <div class="accordion-body">
            <ul class="list-group list-group-flush">
                @foreach ($items as $service)
                <li class="list-group-item">{{ $service }}</li>
                @endforeach
            </ul>
            </div>
        </div>
        </div>
    @endforeach
    </div>
@endsection
