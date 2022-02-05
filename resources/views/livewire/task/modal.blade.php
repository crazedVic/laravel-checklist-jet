<x-modal-base  show="showTaskModal">
   Task Modal<span x-text="taskid"></span>
    <input type="text" wire:model="name">
    <input type="hidden"  wire:model="checklist_id">
    <button wire:click="save()">Save</button>
</x-modal-base>
