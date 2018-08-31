@if(count($singleMenu) > 0)
    @set($i, 1)
    @foreach($singleMenu as $item)
        {{--<div class="grid_4">--}}
        <div class="col-md-4">
            <div class="gall_block">
                <div class="maxheight">

                    {{--<a href="{{route( $alias.'.show', ['alias' => $item->alias])}}" class="gall_item"><img src="{{asset(env('THEME'))}}/images/page2_img1.jpg" alt="" ></a>--}}
                    <a href="#" class="gall_item"><img src="{{asset(env('THEME'))}}/images/page2_img1.jpg" alt="" ></a>



                    <div class="gall_bot">
                        <div class="text1">
                            {{--<a href="#">{{$item->name}} </a>--}}
                            <a href="#">{{$item->title}} </a>
                        </div>
                        Rehoncus. Aliquam nibh antegestas id ictum a, commodo. Praesenterto faucibus maleada faucibusnec laeet metus id laoreet
                        <br>

                        @if(Auth::check())
                            <div class="quantity">
                                <input data-id="{{$item->id}}" type="number" size="4" value="1" name="quantity" min="1" step="1">
                            </div>
                            <a id="productAdd" data-id="{{$item->id}}" href="{{ route('reserveAdd', ['id' => $item->id]) }}" class="add-to-reserve-link">Зарезервировать</a>
                        @endif
                        {{--href="/reserve/add?id={{$item->id}}"--}}

                        {{--<a href="{{route( $alias.'.show', ['alias' => $item->alias])}}" class="btn" target="_blank">Перейти к {{$item->name}}</a></div>--}}

                    {{--<a href="{{route( $alias.'.show', ['alias' => $item->alias])}}" class="btn" target="_blank">Перейти к {{$item->title}}</a></div>--}}
                    </div>

                </div>
            </div>
        </div>

        @if($i%3 == 0)
            {{--<div class="clear sep__1"></div>--}}
            <div class="clear"></div>
        @endif

        @set($i,$i+1)
    @endforeach

@endif