<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-4">
            {{ Form::label('name') }}
            {{ Form::text('name', $team->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('score') }}
            {{ Form::text('score', $team->score, ['class' => 'form-control' . ($errors->has('score') ? ' is-invalid' : ''), 'placeholder' => 'Score']) }}
            {!! $errors->first('score', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
    </div>
</div>