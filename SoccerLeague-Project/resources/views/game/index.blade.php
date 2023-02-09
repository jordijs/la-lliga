@extends('layouts.app')

@section('template_title')
    Partits
@endsection

@section('content')
    <div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="sm:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Partits') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('games.create') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-1 px-2 leading-tight text-xs  float-right"  data-placement="left">
                                  {{ __('Nou partit ') }}
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
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">Jornada</th>
                                        
										<th scope="col" class="px-6 py-3">Equip Local</th>
										<th scope="col" class="px-6 py-3">Equip visitant</th>
										<th scope="col" class="px-6 py-3">Data i hora</th>
										<th scope="col" class="px-6 py-3">Gols local</th>
										<th scope="col" class="px-6 py-3">Gols visitant</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($games as $game)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">{{ ++$i }}</td>
                                                
                                            <td class="px-6 py-4">{{ $game->team_local_id }}</td>
                                            <td class="px-6 py-4">{{ $game->team_visitor_id }}</td>
                                            <td class="px-6 py-4">{{ $game->date_time }}</td>
                                            <td class="px-6 py-4">{{ $game->goals_local }}</td>
                                            <td class="px-6 py-4">{{ $game->goals_visitor }}</td>

                                            <td class="px-6 py-4">
                                                <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                                                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-blue-600 text-white hover:bg-blue-600 " href="{{ route('games.show',$game->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-green-500 text-white hover:green-600" href="{{ route('games.edit',$game->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-red-600 text-white hover:bg-red-700 py-1 px-2 leading-tight text-xs "><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $games->links() !!}
            </div>
        </div>
    </div>
@endsection
