
<!--prdt-starts-->
<div class="prdt">
    <div class="container">
        <a href="{{ route('home') }}" type="button" class="btn btn-primary"><h4>Вернуться в ресторан</h4></a>
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one cart">
                    <div class="register-top heading">
                        <h2>Оформление заказа</h2>
                    </div>
                    <br><br>

                    @if($data && !empty(session('reserve')))

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

                                <tr>
                                    <td>{{$item['title']}}</td>
                                    <td>{{$item['qty']}}</td>
                                    <td>{{$item['amount']}}</td>
                                    <td>{{$item['price']}}</td>
                                    <td><a href="{{ route('reserveDel', ['id' => $id]) }}"><span data-id="{{$id}}" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></a></td>

                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 account-left">
                        <form method="post" action="{{ route('reserve.store') }}" role="form" data-toggle="validator">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="address">Note</label>
                                <textarea name="note" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">Оформить</button>
                        </form>
                    </div>
                    @else
                    <h3>Заказов нет</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!--product-end-->