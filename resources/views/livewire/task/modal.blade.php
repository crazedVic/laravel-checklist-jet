<x-modal-base show="showTaskModal">
    <div>
        <x-slot name="title">Create New Task</x-slot>
        <div class="w-full px-5 space-y-2">
            <div>Name<input class="w-full" type="text"></div>
            <div>Select Template<select class="w-full">
                    <option>Single Document</option>
                    <option>Single Document or TextBox</option>
                    <option>Multiple Documents</option>
                    <option>Multiple Documents or Textboxes</option>
                    <option>Single Entry Form</option>
                    <option>Multiple Entry Forms</option>
                </select>
            </div>
        </div>
        <x-slot name="footer">
            <button class="btn bg-gray-800" wire:click="save()">Cancel</button>
            <button class="btn bg-green-800" wire:click="save()">Save</button>
            <button class="btn bg-blue-800"  wire:click="save()">Save & Add</button>
        </x-slot>
    </div>
</x-modal-base>
