<div>
    <h1 style="text-shadow: 2px 2px {{ $shadow }}px #ffca2c">Light</h1>
    {{-- &#128161; ça permet de générer la lampe --}}
    <h2>&#128161;{{ $brightness }}%</h2>

    <div class="progress">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar"
            style="width: {{ $brightness }}%" aria-valuenow="{{ $brightness }}" aria-valuemin="0"
            aria-valuemax="100"></div>
    </div>

    <div class="mt-3">
        {{-- wire:click lorsqu'on click sur ce bouton on appel la méthode off --}}
        <button class="btn btn-danger" wire:click="off">OFF</button>
        <button class="btn btn-secondary fw-bolder" wire:click="moins" @if ($brightness < 10)disabled @endif>-</button>
        <button class="btn btn-secondary fw-bolder" wire:click="plus" @if ($brightness > 90)disabled @endif>+</button>
        <button class="btn btn-primary" wire:click="on">ON</button>
    </div>

</div>
