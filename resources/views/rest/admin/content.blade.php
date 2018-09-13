<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Панель управления
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('adminIndex', ['id' => Auth::user()->id]) }}"><i class="fa fa-dashboard"></i> Главная</a></li>
    </ol>
</section>

<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ $countReserves }}</h3>

                    <p>Reserves</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('admin.reserve.index') }}" class="small-box-footer">Все заказы <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->

    </div>

</section>