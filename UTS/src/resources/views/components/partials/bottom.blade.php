@php
    $footer = \App\Models\Footer::first();
@endphp


<footer class="section-sm bg-tertiary">
	<div class="container">
        <div class="container d-flex justify-content-center">
            <a wire:navigate href="{{ route ('beranda') }}"> {{$footer->label ?? ''}}</a>
        </div>
	</div>
</footer>