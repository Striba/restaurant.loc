<div class="grid_11">
    <h2>Форма создания группы:</h2>

    {!! Form::open(['route' => 'groupAdd', 'class'=> 'form-inline']) !!}
    <div class="form-group">
        {!! Form::label('email', 'emailAdress') !!}
        {!! Form::text('username') !!}
    </div>

    {!! Form::close() !!}
</div>
