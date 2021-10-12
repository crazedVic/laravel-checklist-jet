<div class="grid grid-cols-12">
    <div class="col-span-4">@livewire('process')</div>
    @if($firm)
        <div class="col-span-8">@livewire('firm-items')</div>
    @else
        <div class="col-span-8">@livewire('items')</div>
    @endif
</div>
