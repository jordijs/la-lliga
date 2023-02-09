<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="mb-4">
            {{ Form::label('Equip') }}
            {{ Form::text('name', $team->name, ['class' => 'block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded' . ($errors->has('name') ? ' is-invalid' : '')]) }}
            {!! $errors->first('name', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
        <div class="mb-4">
            {{ Form::label('Punts') }}
            {{ Form::text('score', $team->score, ['class' => 'block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded' . ($errors->has('score') ? ' is-invalid' : '')]) }}
            {!! $errors->first('score', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Submit</button>
    </div>
</div>