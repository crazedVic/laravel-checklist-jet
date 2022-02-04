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
                            <div class="text-gray-700 ml-7">{{$item->name}}
                                <div class="ml-5">
                                    @if($item->taskDependencies->first())Depends on Tasks:@endif
                                    @foreach($item->taskDependencies as $taskDependency)
                                        <div
                                            class="text-blue-500 ml-2">{{$taskDependency->id}} {{$taskDependency->name}} with status of {{$taskDependency->pivot->required}}</div>
                                    @endforeach
                                    @if($item->checklistDependencies->first())Depends on Checklists:@endif
                                    @foreach($item->checklistDependencies as $clDependency)
                                        <div
                                            class="text-green-500 ml-2">{{$clDependency->id}}  {{$clDependency->name}} with status of {{$clDependency->pivot->required}}</div>
                                    @endforeach
                                </div>
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
