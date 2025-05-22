<h1>Name page</h1>
{{-- <h1>{{$user}}</h1> --}}

@foreach ($arr as $value)
<h5>{{$value}}</h5>
@endforeach

@if ($name == "varsil")
<h1>hii varsil</h1>
@else
<h1>bye</h1>

@endif
