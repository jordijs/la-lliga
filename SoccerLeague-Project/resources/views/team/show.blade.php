@extends('layouts.app')

@section('template_title')
    {{ $team->name ?? 'Show Team' }}
@endsection

@section('content')
<section class="content container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="md:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div class="float-left">
                            <span class="mb-3">{{ ('Dades del ') . $team->name }}</span>
                        </div>
                        <div class="float-right">
                            <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" href="{{ route('teams.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="flex-auto p-6">
                        
                        <div class="mb-4">
                            <strong>Nom:</strong>
                            {{ $team->name }}
                        </div>
                        <div class="mb-4">
                            <strong>Puntuació actual:</strong>
                            {{ $team->score }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="sm:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Jugadors') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('players.create') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-1 px-2 leading-tight text-xs  float-right"  data-placement="left">
                                  {{ __('Afegeix jugador') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="flex-auto p-6">
                        <div class="block w-full overflow-auto scrolling-touch">
                            <table class="w-full max-w-full mb-4 bg-transparent table-auto text-start">
                                <thead>
                                    <tr>                                        
										<th class="text-start">Nom</th>
										<th class="text-start">Primer cognom</th>
										<th class="text-start">Segon cognom</th>
										<th class="text-start">Posició</th>
										<th class="text-start">Data de naixement</th>
                                        <th class="text-start"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team->players as $player)
                                        <tr>
											<td>{{ $player->name }}</td>
											<td>{{ $player->surname1 }}</td>
											<td>{{ $player->surname2 }}</td>
											<td>{{ $player->role }}</td>
											<td>{{ $player->birthdate }}</td>
                                            <td>
                                                <form action="{{ route('players.destroy',$player->id) }}" method="POST">
                                                    <a title="Mostra" class="rounded  p-2 text-xs bg-blue-600 text-white" href="{{ route('players.show',$player->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                    <a title="Edita" class="rounded  p-2 text-xs bg-blue-600 text-white" href="{{ route('players.edit',$player->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button title="Esborra" type="submit" class="rounded  p-2 text-xs bg-blue-600 text-white"><i class="fa fa-fw fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>                
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
