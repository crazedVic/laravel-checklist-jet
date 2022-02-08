@props([
    'show'=>"showTaskModal", 'title'=>"Please add Title in \$title slot", 'footer'=>"\$footer slot should have buttons"
])
<div class="fixed inset-0 w-full flex justify-center items-center bg-black bg-opacity-25"
     x-show="{{$show}}">
    <div @click.away="{{$show}} = false;"
         class="bg-white border border-gray-600 shadow-lg rounded sm:min-h-16 w-full sm:w-3/4 lg:w-1/2">
        <div class="flex justify-between w-full bg-black text-white px-2 py-1"><span>{{ $title }}</span>
            <span class="cursor-pointer" @click="{{$show}}=false;">X</span></div>
        <div class="m-3">
            {{$slot}}
        </div>
        <div class="border-t border-gray-200 w-full flex justify-end space-x-2 px-3 py-2">
            {{ $footer }}
        </div>
    </div>
</div>
