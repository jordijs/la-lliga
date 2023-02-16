@extends('layouts.app')

@section('template_title')
Equips
@endsection

@section('content')
<div class="container mx-auto sm:px-4 max-w-xl mx-auto sm:px-4">
    <div class="flex flex-wrap ">
        <div class="sm:w-full pr-4 pl-4">
            <h1>
                {{ __('Equips') }}
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
                        <th scope="col" class="th-nice">Nom</th>
                        <th scope="col" class="th-nice">Puntuació</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr class="tr-nice">
                        <td class="td-nice">
                            <a href="{{ route('teams.show',$team->id) }}">
                                {{ $team->name }}
                            </a>
                        </td>
                        <td class="td-nice">
                            <a href="{{ route('teams.show',$team->id) }}">
                                {{ $team->score }}
                            </a>
                        </td>
                        <td class="td-nice">
                            <form action="{{ route('teams.destroy',$team->id) }}" method="POST">
                                <a title="Mostra els detalls de l'equip" class="edit-btn" href="{{ route('teams.show',$team->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                <a title="Edita l'equip" class="edit-btn" href="{{ route('teams.edit',$team->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <button title="Esborra l'equip" type="submit" class="delete-btn"><i class="fa fa-fw fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr class="tr-nice">
                        <td class="td-nice" colspan="6">
                            <a title="Nou equip" href="{{ route('teams.create') }}" class="add-btn">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
        </div>
        </tbody>
        </table>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection