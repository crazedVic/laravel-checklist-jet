<ul>
    @foreach($items as $item)
        <li>&nbsp;&nbsp;
            <input class="mr-2" @change="$wire.emit('item_completed',{{$item->id}},event.target.checked)" type="checkbox" value="{{$item->completed}}"
                   disabled="{{$item->parent->status != $item->activated_parent_status}}">
            {{$item->description}}
            <span x-data="{ open: false }">
                <div class="ml-3">@include("partials.item", ["items" => $item->children->where("activated_parent_status","Active")])</div>
                @include("partials.item", ["items" => $item->children->where("activated_parent_status","Completed")])
            </span>
        </li>
    @endforeach
</ul>
