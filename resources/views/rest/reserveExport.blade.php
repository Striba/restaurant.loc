<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>

                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Номер заказа: </td>
                                <td>{{ $data['id'] }}</td>
                            </tr>
                            <tr>
                                <td>Дата заказа: </td>
                                <td>{{ $data['created_at'] }}</td>
                            </tr>

                            <tr>
                                <td>ID заказчика: </td>
                                <td>{{ $data['user_id'] }}</td>
                            </tr>

                            <tr>
                                <td>Комментарий: </td>
                                <td>{{ $data['note'] }}</td>
                            </tr>

                            </tbody>
                        </table>

<h3>Детали заказа: </h3>

<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>
            ID
        </th>
        <th>
            Название
        </th>
        <th>
            Кол-во
        </th>
        <th>
            Цена
        </th>
    </tr>

    </thead>
    <tbody>
    @foreach($data['dishes'] as $dish)
        <tr>
            <td>{{ $dish['pivot']['dishes_id'] }}</td>
            <td>{{ $dish['pivot']['title'] }}</td>
            <td>{{ $dish['pivot']['qty'] }}</td>
            <td>{{ $dish['pivot']['price'] }}</td>
        </tr>
    @endforeach


    </tbody>
</table>