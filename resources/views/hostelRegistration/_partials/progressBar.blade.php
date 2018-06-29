

{{--
<ul>
    @foreach($wizard->all() as $key => $_step)
        <li>
            @if($step->index == $_step->index)

                        {{ $_step::$label }}

            @elseif($step->index > $_step->index)
                <a href="{{ route('hostel.registration', [$_step::$slug]) }}"></a>
            @else
                {{ $_step::$label }}
            @endif
        </li>
    @endforeach
</ul>
--}}

    {{--@include($step::$view, compact('step', 'errors'))--}}


 {{$step->progress()}}
