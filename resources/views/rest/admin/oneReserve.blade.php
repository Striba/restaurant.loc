<section class="content-header">
    <h1>
        Заказ №{{ $data->id }}
        <a href="{{ route('reservePdf', $data->id) }}" class="btn btn-success btn-xs">распечатать в PDF </a>
        {!! Form::open(['method' => 'Delete', 'route' => ['admin.reserve.destroy', $data->id]]) !!}
        <button type="submit" class="btn btn btn-danger btn-xs delete">Удалить</button>
        {!! Form::close() !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('adminIndex', ['id' => Auth::user()->id]) }}"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="{{ route('admin.reserve.index') }}">Список заказов</a></li>
        <li class="active"> Заказ №{{ $data->id }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Номер заказа</td>
                                <td>{{ $data->id }}</td>
                            </tr>
                            <tr>
                                <td>Дата заказа</td>
                                <td>{{ $data->created_at }}</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<td>Кол-во порции в заказе</td>--}}
                                {{--<td>{{ $data->amount }}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td>Цена заказа</td>--}}
                                {{--<td>{{ $data->price }}</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td>Имя заказчика</td>
                                <td>{{ Auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <td>ID заказчика</td>
                                <td>{{ $data->user_id }}</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<td>Название блюда</td>--}}
                                {{--<td>{{ $data->title }}</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <td>Комментарий</td>
                                <td>{{ $data->note }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <h3>Детали заказа</h3>
    <div class="box">
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Наименование</th>
                        <th>Кол-во</th>
                        <th>Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($reserves_dishes))
                   @foreach ($reserves_dishes as $dish)
                    <tr>
                        <td>{{ $dish->pivot->dishes_id }}</td>
                        <td>{{ $dish->pivot->title }}</td>
                        <td>{{ $dish->pivot->qty }}</td>
                        <td>{{ $dish->pivot->price }}</td>
                    </tr>
                    @endforeach
                        @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>