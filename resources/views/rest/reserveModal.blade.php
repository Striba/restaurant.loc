@if(!empty(session('reserve')))
    {{--{{ dump(Session::all()) }}--}}
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>Наименование</th>
                <th>Кол-во</th>
                <th>Объем порции (грамм):</th>
                <th>Цена заказанный порций</th>
                <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $id => $item)
                @if($id != 'sum')
                    <tr>
                         {{--<td>{{$item['name']}}</td>--}}
                        <td>{{$item['title']}}</td>
                         <td>{{$item['qty']}}</td>
                         <td>{{$item['amount']}}</td>
                         <td>{{$item['price']}}</td>
                    <td><span data-id="{{$id}}" data-link="{{ route('reserveDel') }}" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>

                    </tr>
                @endif
            @endforeach

                {{--<tr>--}}
                    {{--<td>На сумму:</td>--}}
                    {{--<td colspan="4" class="text-right reserve-sum">{{session('reserve.sum')}}</td>--}}
                {{--</tr>--}}
            </tbody>
        </table>
    </div>
@else
<h3>Заказов нет.</h3>
@endif