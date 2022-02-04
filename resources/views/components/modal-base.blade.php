@props([
    'show'=>"showTaskModal"
])
<div class="fixed inset-0 w-full flex justify-center items-center bg-black bg-opacity-25"
     x-show="{{$show}}">
    <div @click.away="{{$show}} = false;"
         class="bg-white border border-gray-600 shadow-md rounded p-20">
        {{$slot}}
    </div>
</div>
