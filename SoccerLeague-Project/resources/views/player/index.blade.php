@extends('layouts.app')

@section('template_title')
    Player
@endsection

@section('content')
<div class="container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="sm:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Player') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('players.create') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline bg-blue-600 text-white hover:bg-blue-600 py-1 px-2 leading-tight text-xs  float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                            <table class="w-full max-w-full mb-4 bg-transparent table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Surname1</th>
										<th>Surname2</th>
										<th>Role</th>
										<th>Birthdate</th>
										<th>Team Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($players as $player)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $player->name }}</td>
											<td>{{ $player->surname1 }}</td>
											<td>{{ $player->surname2 }}</td>
											<td>{{ $player->role }}</td>
											<td>{{ $player->birthdate }}</td>
											<td>{{ $player->team_id }}</td>

                                            <td>
                                                <form action="{{ route('players.destroy',$player->id) }}" method="POST">
                                                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-blue-600 text-white hover:bg-blue-600 " href="{{ route('players.show',$player->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded  no-underline py-1 px-2 leading-tight text-xs  bg-green-500 text-white hover:green-600" href="{{ route('players.edit',$player->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $players->links() !!}
            </div>
        </div>
    </div>
@endsection
