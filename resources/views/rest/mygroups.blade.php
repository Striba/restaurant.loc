{{--@if(count($groups)>0)--}}
@if($groups)

        <h3>Ваши группы: </h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID группы</th>
                    <th>ID собственника группы</th>
                    <th>Дата создания</th>
                    <th>Дата изменения</th>
                    <th>Участники</th>
                    <th>Групповые заказы</th>
                </tr>
                </thead>

            </table>
        </div>


        <a href="{{ route('groupAdd') }}" class="btn btn-primary">Создать группу</a>

@else

    <h3>У вас пока нет групп</h3>
    <a href="#" class="btn btn-primary">Создать группу</a>

@endif

