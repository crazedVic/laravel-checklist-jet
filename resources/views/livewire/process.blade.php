<div>
    <ul>
    @foreach($processes as $process)
       <li class="font-bold">{{ $process->name }}</li>
        <ol class="ml-5">
        @foreach($process->checklists as $checklist)
                <li><button wire:click="$emit('poop',{{$checklist}})">{{$checklist->name}}</button></li>
            @endforeach
        </ol>
    @endforeach
    </ul>
</div>
@push('scripts')
    <script type="text/javascript">
        Livewire.on('poop', postId => {
            console.log('checklist clicked');
        });
    </script>
@endpush
