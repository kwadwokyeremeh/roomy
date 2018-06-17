<ul>
    @foreach($wizard->all() as $key => $_step)
        <li>
            @if($step->index == $_step->index)
                <strong>{{ $_step::$label }}</strong>
            @elseif($step->index > $_step->index)
                <a href="{{ route('hostel.registration', [$_step::$slug]) }}">{{ $_step::$label }}</a>
            @else
                {{ $_step::$label }}
            @endif
        </li>
    @endforeach
</ul>
<form action="{{ route('hostel.registration.submit', [$step::$slug]) }}" method="POST">
    {{ csrf_field() }}

    {{--@include($step::$view, compact('step', 'errors'))--}}



