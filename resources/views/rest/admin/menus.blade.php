<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Список пунктов меню
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('adminIndex', ['id' => Auth::user()->id]) }}"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Список пунктов меню</li>
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
                                <th>ID меню</th>
                                <th>Название</th>
                                <th>алиас</th>
                                <th>
                                    <a href="{{ route('menuPdf') }}" class="btn btn-success btn-xs">распечатать в PDF </a>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($data)
                                @foreach($data as $item)
                                    <tr class="">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->alias }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td>Пусто</td></tr>
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