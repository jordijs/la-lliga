@extends('layouts.app')

@section('template_title')
    {{ $player->name ?? 'Show Player' }}
@endsection

@section('content')
    <section class="content container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="md:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <div class="float-left">
                            <span class="mb-3">Detalls del jugador</span>
                        </div>
                    </div>

                    <div class="flex-auto p-6">
                        
                        <div class="mb-4">
                            <strong>Nom:</strong>
                            {{ $player->name }}
                        </div>
                        <div class="mb-4">
                            <strong>Primer cognom:</strong>
                            {{ $player->surname1 }}
                        </div>
                        <div class="mb-4">
                            <strong>Segon cognom:</strong>
                            {{ $player->surname2 }}
                        </div>
                        <div class="mb-4">
                            <strong>Posició:</strong>
                            {{ $player->role }}
                        </div>
                        <div class="mb-4">
                            <strong>Data de naixement:</strong>
                            {{ $player->birthdate }}
                        </div>
                        <div class="mb-4">
                            <strong>Equip:</strong>
                            {{ $player->team->name }}
                        </div>

                    </div>
                    
                </div>
                <div class="float-left">
                            <a class="edit-btn" href="{{ route('players.index') }}">Torna a Jugadors</a>
                            <a class="edit-btn" href="{{ route('teams.index') }}">Torna a Equips</a>

                        </div>
            </div>
        </div>
    </section>
@endsection
