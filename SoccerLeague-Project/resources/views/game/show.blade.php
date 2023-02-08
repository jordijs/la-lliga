@extends('layouts.app')

@section('template_title')
    {{ $game->name ?? 'Show Game' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Game</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Team Local Id:</strong>
                            {{ $game->team_local_id }}
                        </div>
                        <div class="form-group">
                            <strong>Team Visitor Id:</strong>
                            {{ $game->team_visitor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date Time:</strong>
                            {{ $game->date_time }}
                        </div>
                        <div class="form-group">
                            <strong>Goals Local:</strong>
                            {{ $game->goals_local }}
                        </div>
                        <div class="form-group">
                            <strong>Goals Visitor:</strong>
                            {{ $game->goals_visitor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
