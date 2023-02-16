@extends('layouts.app')

@section('template_title')
Nou partit
@endsection

@section('content')
<section class="content container mx-auto sm:px-4 max-w-2xl mx-auto sm:px-4 max-w-sm rounded overflow-hidden shadow-lg">
    @includeif('partials.errors')
    <h1>Nou partit</h1>
    <div class="flex-auto p-6">
        <form method="POST" action="{{ route('games.store') }}" role="form" enctype="multipart/form-data">
            @csrf

            @include('game.form')

        </form>
    </div>
    </div>
    </div>
    </div>
</section>
@endsection