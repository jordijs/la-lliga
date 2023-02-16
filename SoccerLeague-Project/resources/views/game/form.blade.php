<form class="w-full max-w-sm">
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="form-label" for="team_local_id">
                Equip Local
            </label>
        </div>
        <div class="md:w-2/3">
            {{ Form::select('team_local_id', $teams, $game->team_local_id, ['class' => 'form-input' . ($errors->has('team_local_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('team_local_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="form-label" for="team_visitor_id">
                Equip visitant
            </label>
        </div>
        <div class="md:w-2/3">
        {{ Form::select('team_visitor_id', $teams, $game->team_visitor_id, ['class' => 'form-input' . ($errors->has('team_local_id') ? ' is-invalid' : '')]) }}
            {!! $errors->first('team_visitor_id', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="form-label" for="date_time">
                Dia i hora
            </label>
        </div>
        <div class="md:w-2/3">
            {{ Form::datetimeLocal('date_time', $game->date_time, ['class' => 'form-input' . ($errors->has('date_time') ? ' is-invalid' : '')]) }}
            {!! $errors->first('date_time', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="form-label" for="goals_local">
                Gols Local
            </label>
        </div>
        <div class="md:w-2/3">
            {{ Form::text('goals_local', $game->goals_local, ['class' => 'form-input' . ($errors->has('goals_local') ? ' is-invalid' : '')]) }}
            {!! $errors->first('goals_local', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}

        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="form-label" for="goals_visitor">
                Gols visitant
            </label>
        </div>
        <div class="md:w-2/3">
            {{ Form::text('goals_visitor', $game->goals_visitor, ['class' => 'form-input' . ($errors->has('goals_visitor') ? ' is-invalid' : '')]) }}
            {!! $errors->first('goals_visitor', '<div class="hidden mt-1 text-sm text-red">:message</div>') !!}

        </div>

    </div>
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
        </div>
        <div class="md:w-2/3">
            <button type="submit" class="ok-btn">D'acord</button>
        </div>
    </div>
</form>