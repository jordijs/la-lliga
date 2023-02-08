@extends('layouts.app')

@section('template_title')
    Player
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Player') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('players.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
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
                                                    <a class="btn btn-sm btn-primary " href="{{ route('players.show',$player->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('players.edit',$player->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
