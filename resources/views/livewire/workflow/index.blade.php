<ul class="w-3/4 mx-auto text-black mt-5">
    @foreach($workflows as $workflow)
            <div class="align-text-bottom text-xl"><i style="font-size: 1.4rem;"
                                                      class="fas fa-project-diagram text-blue-600 mr-2"></i>
                {{ $workflow->name }} <a class="ml-1 text-sm underline text-blue-700" href="#">Add Checklist</a></div>
            {{--           <button wire:click="generateWorkflow({{$workflow}})" class="p-1 m-1 text-white bg-indigo-500">--}}
            {{--               Generate Workflow</button></li>--}}
            <ol class="ml-5">
                @foreach($workflow->checklists as $checklist)
                    <li>
                        <div class="text-xl pl-6"><i style="font-size: 1.4rem;" class="fas fa-list text-yellow-600 mr-2"></i>
                            <button wire:click="$emit('poop',{{$checklist}})">{{$checklist->name}}</button><a class="ml-1 text-sm underline text-blue-700" href="#">Add Task</a></div>
                        @foreach($checklist->items as $item)
                            <div class="text-xl pl-20 text-gray-800"><i style="font-size: 1.4rem;"
                                                                         class="fas fa-file-upload text-blue-600 mr-2"></i>
                                {{$item->name}}<i style="font-size: 1rem;"
                                                  class="fas fa-pencil-alt text-blue-400 ml-1"></i><i style="font-size: 1rem;"
                                                  class="fas fa-trash text-red-400 ml-1"></i></div>
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
