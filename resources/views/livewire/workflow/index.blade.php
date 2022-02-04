<ul class="w-3/4 mx-auto text-black mt-5">
    @foreach($workflows as $workflow)
        <li class="font-bold">{{ $workflow->name }}
            {{--           <button wire:click="generateWorkflow({{$workflow}})" class="p-1 m-1 text-white bg-indigo-500">--}}
            {{--               Generate Workflow</button></li>--}}
            <ol class="ml-5">
                @foreach($workflow->checklists as $checklist)
                    <li>
                        <button wire:click="$emit('poop',{{$checklist}})">{{$checklist->name}}</button>
                        @foreach($checklist->items as $item)
                            <div class="text-gray-700 ml-3">{{$item->name}}
                                @foreach($item->taskDependencies as $taskDependency)
                                    <div
                                        class="text-blue-500 ml-3">{{$taskDependency->id}} {{$taskDependency->pivot->required}}</div>
                                @endforeach
                                @foreach($item->checklistDependencies as $clDependency)
                                    <div
                                        class="text-green-500 ml-3">{{$clDependency->id}} {{$clDependency->pivot->required}}</div>
                                @endforeach
                            </div>
                        @endforeach
                    </li>
                @endforeach
            </ol>
    @endforeach
</ul>
@push('scripts')
    <script type="text/javascript">
        Livewire.on('poop', postId => {
            console.log('checklist clicked');
        });
    </script>
@endpush
