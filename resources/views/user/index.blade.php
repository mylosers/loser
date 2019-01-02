{{ $page }}

@foreach ($list as $v)
    {{$v->uid}} : {{$v->user_name}} : {{$v->email}} <br>
@endforeach

