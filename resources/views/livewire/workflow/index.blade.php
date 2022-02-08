<div class="w-3/4 mx-auto text-black mt-5" id="parentView"
     x-data="{showChecklistModal: false, showTaskModal: false, taskid: 0}"
    x-on:closemodal.window="$data[event.detail.modal] = false">
    @foreach($workflows as $workflow)
            <div class="align-text-bottom text-xl"><i style="font-size: 1.4rem;"
                                                      class="fas fa-project-diagram text-blue-600 mr-2"></i>
             {{ $workflow->name }} <a class="ml-1 text-sm underline text-blue-700" href="#"
                                         @click="showChecklistModal = true">Add Checklist</a></div>
            {{--           <button wire:click="generateWorkflow({{$workflow}})" class="p-1 m-1 text-white bg-indigo-500">--}}
            {{--               Generate Workflow</button></li>--}}
            <div class="ml-5">
                @foreach($workflow->checklists as $checklist)
                    <livewire:checklist.index :checklist="$checklist" />
                @endforeach
            </div>
    @endforeach
    <span x-cloak>
        <livewire:task.modal/>
        <livewire:checklist.modal/>
    </span>

@push('scripts')
    <script type="text/javascript">
        Livewire.on('poop', postId => {
            console.log('checklist clicked');
        });
    </script>
@endpush
</div>
