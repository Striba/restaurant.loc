<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>

                        <table class="table table-bordered table-hover">
                            <tbody>
                            <tr>
                                <td>Номер заказа</td>
                                <td>{{ $data['id'] }}</td>
                            </tr>
                            <tr>
                                <td>Дата заказа</td>
                                <td>{{ $data['created_at'] }}</td>
                            </tr>
                            <tr>
                                <td>Кол-во порции в заказе</td>
                                <td>{{ $data['amount'] }}</td>
                            </tr>
                            <tr>
                                <td>Цена заказа</td>
                                <td>{{ $data['price'] }}</td>
                            </tr>
                            <tr>
                                <td>ID заказчика</td>
                                <td>{{ $data['user_id'] }}</td>
                            </tr>
                            <tr>
                                <td>Название блюда</td>
                                <td>{{ $data['title'] }}</td>
                            </tr>
                            <tr>
                                <td>Комментарий</td>
                                <td>{{ $data['note'] }}</td>
                            </tr>
                            </tbody>
                        </table>