<div>
    @foreach($firms as $firm)
        <livewire:firm.card :firm="$firm" />
        <button class="btn" wire:click="$emit('firm-update-{{$firm->id}}')">
            Trigger event to id {{$firm->id}} from parent</button>
         @endforeach

</div>
