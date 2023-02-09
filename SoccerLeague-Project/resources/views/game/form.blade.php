<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-4">
            {{ Form::label('Equip local') }}
            {{ Form::text('team_local_id', $game->team_local_id, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('team_local_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('team_local_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('Equip visitant') }}
            {{ Form::text('team_visitor_id', $game->team_visitor_id, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('team_visitor_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('team_visitor_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('Dia i hora') }}
            {{ Form::text('date_time', $game->date_time, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('date_time') ? ' is-invalid' : '')]) }}
            {!! $errors->first('date_time', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('Gols Local') }}
            {{ Form::text('goals_local', $game->goals_local, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('goals_local') ? ' is-invalid' : '')]) }}
            {!! $errors->first('goals_local', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('Gols visitant') }}
            {{ Form::text('goals_visitor', $game->goals_visitor, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('goals_visitor') ? ' is-invalid' : '')]) }}
            {!! $errors->first('goals_visitor', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Crea</button>
    </div>
</div>