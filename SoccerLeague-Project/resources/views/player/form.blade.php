<div class="box box-info padding-1">
    @if ($errors->any())
    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
<div class="box-body">
    <div class="mb-4">
        {{ Form::label('Nom') }}
        {{ Form::text('name', $player->name, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('name') ? ' is-invalid' : '')]) }}
        {!! $errors->first('name', '<div class="mt-1 text-sm text-red">:message</div>') !!}
    </div>
    <div class="mb-4">
        {{ Form::label('Primer cognom') }}
        {{ Form::text('surname1', $player->surname1, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('surname1') ? ' is-invalid' : '')]) }}
        {!! $errors->first('surname1', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
    </div>
    <div class="mb-4">
        {{ Form::label('Segon cognom') }}
        {{ Form::text('surname2', $player->surname2, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('surname2') ? ' is-invalid' : '')]) }}
        {!! $errors->first('surname2', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
    </div>
    <div class="mb-4">
        {{ Form::label('Posició') }}
        <?php 
        //dd($player->role);
        ?>

        <!--I'm mixing syntax to be able to make SELECT work-->
    <select class = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('role') is-invalid @enderror" name="role">
            <option value="goalkeeper" <?= $player->role === 'goalkeeper' ? 'selected' : '' ?>>Porter</option>
            <option value="defender" <?= $player->role === 'defender' ? 'selected' : '' ?>>Defensa</option>
            <option value="midfielder" <?= $player->role === 'midfielder' ? 'selected' : '' ?>>Migcampista</option>
            <option value="forward" <?= $player->role === 'forward' ? 'selected' : '' ?>>Davanter</option>
    </select>
        {!! $errors->first('role', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
    </div>
    <div class="mb-4">
        {{ Form::label('Data de naixement') }}
        {{ Form::date('birthdate', $player->birthdate, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('birthdate') ? ' is-invalid' : '')]) }}
        {!! $errors->first('birthdate', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
    </div>
    <div class="mb-4">
        {{ Form::label('Equip') }}
        {{ Form::select('team_id', $teams, $player->team_id, ['class' => 'shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' . ($errors->has('team_id') ? ' is-invalid' : '')]) }}
        {!! $errors->first('team_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
    </div>

</div>
<div class="box-footer mt20">
    <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">D'acord</button>
</div>
</div>