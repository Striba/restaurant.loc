@if(isset($menus))

    {{--{{dd($menu)}}--}}
    {{--@foreach($menus as $item)--}}
        {{--<p>Пункт меню под номером: "{{$item->id}}" называется: "{{$item->name}}"</p>--}}
    {{--@endforeach--}}

@endif

@extends(env('THEME').'.layouts.site')

@section('menus')
    {!! $menus !!}
@endsection


{{--START MAIN NAVIGATION--}}

<!-- START MAIN NAVIGATION -->
{{--@yield('navigation')--}}
<!-- END MAIN NAVIGATION -->

