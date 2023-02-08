<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('team_local_id') }}
            {{ Form::text('team_local_id', $game->team_local_id, ['class' => 'form-control' . ($errors->has('team_local_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Local Id']) }}
            {!! $errors->first('team_local_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_visitor_id') }}
            {{ Form::text('team_visitor_id', $game->team_visitor_id, ['class' => 'form-control' . ($errors->has('team_visitor_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Visitor Id']) }}
            {!! $errors->first('team_visitor_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_time') }}
            {{ Form::text('date_time', $game->date_time, ['class' => 'form-control' . ($errors->has('date_time') ? ' is-invalid' : ''), 'placeholder' => 'Date Time']) }}
            {!! $errors->first('date_time', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('goals_local') }}
            {{ Form::text('goals_local', $game->goals_local, ['class' => 'form-control' . ($errors->has('goals_local') ? ' is-invalid' : ''), 'placeholder' => 'Goals Local']) }}
            {!! $errors->first('goals_local', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('goals_visitor') }}
            {{ Form::text('goals_visitor', $game->goals_visitor, ['class' => 'form-control' . ($errors->has('goals_visitor') ? ' is-invalid' : ''), 'placeholder' => 'Goals Visitor']) }}
            {!! $errors->first('goals_visitor', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>