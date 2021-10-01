<ul>
    @if($checklist)
        @foreach($checklist->items as $item)
{{--            @if(sizeof($item->parents)== 0)--}}
{{--                <li class="font-bold">{{ $item->description }}</li>--}}
{{--                        @foreach($item->children as $child)--}}
{{--                            @if($child->parents->last()->id == $item->id)--}}
{{--                                <li class="ml-5 font-bold">{{ $child->description }}</li>--}}
{{--                                    @foreach($child->children as $gchild)--}}
{{--                                        @if($gchild->parents->last()->id == $child->id)--}}
{{--                                            <li class="ml-5 font-bold">--{{ $gchild->description }}</li>--}}
{{--                                        @endif--}}
{{--                                    @endforeach--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--            @endif--}}

{{--            @foreach($item->children as $child)--}}
{{--                <li class="ml-5 font-bold">{{ $child->description }}</li>--}}
{{--            @endforeach--}}
            <li>
            @if(sizeof($item->parents) > 0)
                        <span>{{implode(",", $item->parents->pluck('description')->toArray())}}</span>
                @endif
                <span class="font-bold">{{ $item->description }}</span>
                @if(sizeof($item->children) > 0)
                    <span>{{implode(",", $item->children->pluck('description')->toArray())}}</span>
                @endif
            </li>
        @endforeach
    @endif
</ul>

