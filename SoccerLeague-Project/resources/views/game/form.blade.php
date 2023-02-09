<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-4">
            {{ Form::label('team_local_id') }}
            {{ Form::text('team_local_id', $game->team_local_id, ['class' => 'form-control' . ($errors->has('team_local_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Local Id']) }}
            {!! $errors->first('team_local_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('team_visitor_id') }}
            {{ Form::text('team_visitor_id', $game->team_visitor_id, ['class' => 'form-control' . ($errors->has('team_visitor_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Visitor Id']) }}
            {!! $errors->first('team_visitor_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('date_time') }}
            {{ Form::text('date_time', $game->date_time, ['class' => 'form-control' . ($errors->has('date_time') ? ' is-invalid' : ''), 'placeholder' => 'Date Time']) }}
            {!! $errors->first('date_time', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('goals_local') }}
            {{ Form::text('goals_local', $game->goals_local, ['class' => 'form-control' . ($errors->has('goals_local') ? ' is-invalid' : ''), 'placeholder' => 'Goals Local']) }}
            {!! $errors->first('goals_local', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('goals_visitor') }}
            {{ Form::text('goals_visitor', $game->goals_visitor, ['class' => 'form-control' . ($errors->has('goals_visitor') ? ' is-invalid' : ''), 'placeholder' => 'Goals Visitor']) }}
            {!! $errors->first('goals_visitor', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
    </div>
</div>