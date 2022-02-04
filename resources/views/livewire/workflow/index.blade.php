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
                                @if($item->taskDependencies->first())<br>  Depends on Tasks:@endif
                                @foreach($item->taskDependencies as $taskDependency)
                                    <div
                                        class="text-blue-500 ml-5">{{$taskDependency->id}} {{$taskDependency->name}} {{$taskDependency->pivot->required}}</div>
                                @endforeach
                                @if($item->checklistDependencies->first())<br>  Depends on Checklists:@endif
                                @foreach($item->checklistDependencies as $clDependency)
                                    <div
                                        class="text-green-500 ml-53">{{$clDependency->id}}  {{$clDependency->name}} {{$clDependency->pivot->required}}</div>
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
