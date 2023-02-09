@extends('layouts.app')

@section('template_title')
    Update Player
@endsection

@section('content')
    <section class="content container mx-auto sm:px-4 max-w-full mx-auto sm:px-4">
        <div class="">
            <div class="md:w-full pr-4 pl-4">

                @includeif('partials.errors')

                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300 card-default">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">
                        <span class="mb-3">Update Player</span>
                    </div>
                    <div class="flex-auto p-6">
                        <form method="POST" action="{{ route('players.update', $player->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('player.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
