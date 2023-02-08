<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $player->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname1') }}
            {{ Form::text('surname1', $player->surname1, ['class' => 'form-control' . ($errors->has('surname1') ? ' is-invalid' : ''), 'placeholder' => 'Surname1']) }}
            {!! $errors->first('surname1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('surname2') }}
            {{ Form::text('surname2', $player->surname2, ['class' => 'form-control' . ($errors->has('surname2') ? ' is-invalid' : ''), 'placeholder' => 'Surname2']) }}
            {!! $errors->first('surname2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('role') }}
            {{ Form::text('role', $player->role, ['class' => 'form-control' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
            {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('birthdate') }}
            {{ Form::text('birthdate', $player->birthdate, ['class' => 'form-control' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('team_id') }}
            {{ Form::text('team_id', $player->team_id, ['class' => 'form-control' . ($errors->has('team_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Id']) }}
            {!! $errors->first('team_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>