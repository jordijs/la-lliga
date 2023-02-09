<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-4">
            {{ Form::label('name') }}
            {{ Form::text('name', $player->name, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('surname1') }}
            {{ Form::text('surname1', $player->surname1, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('surname1') ? ' is-invalid' : ''), 'placeholder' => 'Surname1']) }}
            {!! $errors->first('surname1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('surname2') }}
            {{ Form::text('surname2', $player->surname2, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('surname2') ? ' is-invalid' : ''), 'placeholder' => 'Surname2']) }}
            {!! $errors->first('surname2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('role') }}
            {{ Form::text('role', $player->role, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('role') ? ' is-invalid' : ''), 'placeholder' => 'Role']) }}
            {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('birthdate') }}
            {{ Form::text('birthdate', $player->birthdate, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
            {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('team_id') }}
            {{ Form::text('team_id', $player->team_id, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('team_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Id']) }}
            {!! $errors->first('team_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
    </div>
</div>