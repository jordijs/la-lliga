@extends('layouts.app')

@section('template_title')
Edició de partit
@endsection

@section('content')
<section class="content container mx-auto sm:px-4 max-w-2xl mx-auto sm:px-4 max-w-sm rounded overflow-hidden shadow-lg">
        @includeif('partials.errors')
        <h1>Edició de partit</h1>
        <div class="flex-auto p-6">
            <form class="w-full max-w-sm" method="POST" action="{{ route('games.update', $game->id) }}" role="form" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                @csrf

                @include('game.form')

            </form>
        </div>

</section>
@endsection