<ul>
    @foreach($items as $item)
        <li>&nbsp;&nbsp;{{$item->description}}
            <div class="ml-3">@include("partials.item", ["items" => $item->children->where("activated_parent_status","Active")])</div>
        </li>
    @endforeach
</ul>
