<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список заказов
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('adminIndex', ['id' => Auth::user()->id]) }}"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список заказов</li>
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
                            <thead>
                            <tr>
                                <th>ID заказа</th>
                                <th>ID заказчика</th>
                                <th>Дата создания</th>
                                <th>Дата изменения</th>
                                <th>Сообщение</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data)
                            @foreach($data as $item)
                                <tr class="">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>
                                        <a href="{{ route('admin.reserve.show',['id' => $item->id]) }}" class="btn btn-success btn-xs">Просмотреть</a>

                                        {!! Form::open(['method' => 'Delete', 'route' => ['admin.reserve.destroy', $item->id]]) !!}
                                        <button type="submit" class="btn btn btn-danger btn-xs delete">Удалить</button>
                                        {!! Form::close() !!}

                                    </td>
                                </tr>
                            @endforeach
                                @else
                                <tr><td>Нет заказов</td></tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->