<div>
    <ul>
    @foreach($$workflows as $workflow)
       <li class="font-bold">{{ $workflow->name }}
           <button wire:click="generateWorkflow({{$workflow}})" class="p-1 m-1 text-white bg-indigo-500">
               Generate Workflow</button></li>
        <ol class="ml-5">
        @foreach($workflow->checklists as $checklist)
                <li><button wire:click="$emit('poop',{{$checklist}})">{{$checklist->name}}</button>
                <button wire:click="generateChecklist({{$checklist}})" class="p-1 m-1 text-white bg-indigo-500">
                    Generate Checklist</button></li>
            @endforeach
        </ol>
    @endforeach
    </ul>
    <ul>
        @foreach($$workflows as $workflow)
            <li class="font-bold">{{ $workflow->name }}</li>
            <ol class="ml-5">
                @foreach($workflow->firmChecklists as $firmChecklist)
                    <li><button wire:click="$emit('poopFirm',{{$firmChecklist}})">{{$firmChecklist->created_at
. ' - ' . $firmChecklist->name}}</button></li>
                @endforeach
            </ol>
        @endforeach
    </ul>
    <strong>Independent checklists</strong>
    <ul>

        @foreach($firmChecklists as $firmChecklist)
            <li><button wire:click="$emit('poopFirm',{{$firmChecklist}})">{{$firmChecklist->created_at
. ' - ' . $firmChecklist->name}}</button></li>
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
