<ul>
    @if($checklist)
        @foreach($checklist->items as $item)
            <li>
                @if(!$item->parent)
                    {{$item->description}}
                    <div class="ml-3">@include("partials.item", ["items" => $item->children->where("activated_parent_status","Active")])</div>
                    @include("partials.item", ["items" => $item->children->where("activated_parent_status","Completed")])
                @endif
            </li>
        @endforeach
    @endif
</ul>
