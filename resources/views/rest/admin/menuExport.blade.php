<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
    body { font-family: DejaVu Sans, sans-serif; }
</style>

<table class="table table-bordered table-hover">
    <tbody>
    <tr>
    <th>ID меню</th>
    <th>Название</th>
    <th>алиас</th>
    </tr>
    @if(count($data)>0)
        @foreach($data as $item)
    <tr>
        <td>{{ $item['id'] }}</td>
        <td>{{ $item['name'] }}</td>
        <td>{{ $item['alias'] }}</td>
    </tr>
        @endforeach
        @else
        <tr>
            <td>Пусто</td>
        </tr>
        @endif
    </tbody>
</table>