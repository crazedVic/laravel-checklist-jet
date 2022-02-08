<x-modal-base show="showChecklistModal">
    <div>
        <x-slot name="title">Checklist Modal</x-slot>
        <div class="w-full px-5">
            Please enter a name: <input type="text">
        </div>
        <x-slot name="footer">
            <button class="btn bg-gray-800" wire:click="save()">Cancel</button>
            <button class="btn bg-green-800" wire:click="save()">Save</button>
            <button class="btn bg-blue-800"  wire:click="save()">Save & Add</button>
        </x-slot>
    </div>
</x-modal-base>
