@if(count($menusItems) > 0)
    @set($i, 1)
    @foreach($menusItems as $item)
        <div class="grid_4">
            <div class="gall_block">
                <div class="maxheight">
                    {{--@if($item->alias == 'drinks')--}}
                        {{--<a href="http://restaurant.loc/drinks" class="gall_item"><img src="{{asset(env('THEME'))}}/images/page2_img1.jpg" alt="" ></a>--}}
                    {{--@else--}}
                    {{--<a href="{{route( $item->alias.'Menu')}}" class="gall_item"><img src="{{asset(env('THEME'))}}/images/page2_img1.jpg" alt="" ></a>--}}
                    {{--@endif--}}
                    <a href="{{route('show', ['alias' => $item->alias])}}" class="gall_item"><img src="{{asset(env('THEME'))}}/images/page2_img1.jpg" alt="" ></a>



                    <div class="gall_bot">
                        <div class="text1"><a href="#">{{$item->name}} </a></div>
                        Rehoncus. Aliquam nibh antegestas id ictum a, commodo. Praesenterto faucibus maleada faucibusnec laeet metus id laoreet
                        <br>
                        <a href="{{route('show', ['alias' => $item->alias])}}" class="btn">Перейти к {{$item->name}}</a></div>
                </div>
            </div>
        </div>

        @if($i%3 == 0)
            <div class="clear sep__1"></div>
        @endif

        @set($i,$i+1)
    @endforeach

@endif