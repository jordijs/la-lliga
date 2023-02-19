@extends('layouts.app')

@section('template_title')
    Jugadors
@endsection

@section('content')
    <div class="container mx-auto sm:px-4 max-w-5xl mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="sm:w-full pr-4 pl-4">
                <h1>
                    {{ __('Tots els jugadors') }}
                </h1>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="flex-auto p-6">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="table-nice">
                    <thead class="thead-nice">
                        <tr>
                            <th scope="col" class="th-nice" colspan=3>Nom i cognoms</th>
                            <th scope="col" class="th-nice">Posició</th>
                            <th scope="col" class="th-nice">Data de naixement</th>
                            <th scope="col" class="th-nice">Equip</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($players as $player)
                            <tr class="tr-nice">
                                <td class="td-nice">{{ $player->name }}</td>
                                <td class="td-nice">{{ $player->surname1 }}</td>
                                <td class="td-nice">{{ $player->surname2 }}</td>
                                <td class="td-nice">
                                        @switch ($player->role)
                                            @case ('goalkeeper')
                                                Porter
                                            @break

                                            @case ('defender')
                                                Defensa
                                            @break

                                            @case ('midfielder')
                                                Migcampista
                                            @break

                                            @case ('forward')
                                                Davanter
                                            @break
                                        @endswitch

                                        </td>
                                        <td class="td-nice">{{ $player->birthdate }}</td>
                                        <td class="td-nice">
                                            {{ $player->team->name }}
                                        </td>
                                        <td>
                                            <form action="{{ route('players.destroy', $player->id) }}" method="POST">
                                                <a title="Edita el jugador" class="edit-btn"
                                                    href="{{ route('players.edit', $player->id) }}"><i
                                                        class="fa fa-fw fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button title="Esborra l'equip" type="submit" class="delete-btn"><i
                                                        class="fa fa-fw fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr class="tr-nice">
                                    <td class="td-nice" colspan="6">
                                        <a title="Nou jugador" href="{{ route('players.create') }}" class="add-btn">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        @endsection
