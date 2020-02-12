@extends('layouts.app')
@section('pageTitle', $json->body->name)

@section('content')
<div class="task2-page">
    <div class="row show-decription" id="Program">
        <div class="col-sm-3"><img src="{{ $json->body->image->medium }}" class="mr-3 show-full-img" /></div>
        <div class="col-sm-9">
            <div>
               <h1>{{ $json->body->name }}</h1>
               <h6 class="mt-2 mb-2"><span class="show-time">{{ date('h:i A', strtotime($json->body->schedule->time)) }}</span> On <span class="show-network">{{ $json->body->network->name }}</span></h6>
            </div>
            <div class="clear clearfix"></div>
            <br />
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary">
                    Summary
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseGenres" aria-expanded="false" aria-controls="collapseGenres">
                    Genres & Rating
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseSchedule" aria-expanded="false" aria-controls="collapseSchedule">
                    Schedule
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseOther" aria-expanded="false" aria-controls="collapseOther">
                    Other
                </button>
            </p>
            <div class="collapse show" id="collapseSummary" data-parent="#Program">
                <div class="card card-body">
                    {{ strip_tags($json->body->summary) }}
                </div>
            </div>
            <div class="collapse" id="collapseGenres" data-parent="#Program">
                <div class="card card-body">
                    <span><strong>Category:</strong> {{ $json->body->type }}</span>
                    <span><strong>Rating:</strong> {{ $json->body->rating->average }}</span>
                    <span><strong>Language:</strong> {{ $json->body->language }}</span>
                    <span><strong>Genre(s):</strong> {{ implode($json->body->genres, ', ') }}</span>
                </div>
            </div>
            <div class="collapse" id="collapseSchedule" data-parent="#Program">
                <div class="card card-body">
                    <span><strong>Time:</strong> {{ date('h:i A', strtotime($json->body->schedule->time)) }}</span>
                    <span><strong>Day(s):</strong> {{ implode($json->body->schedule->days, ', ') }}</span>
                </div>
            </div>
            <div class="collapse" id="collapseOther" data-parent="#Program">
                <div class="card card-body">
                    <span><strong>Country:</strong> {{ $json->body->network->country->name }}</span>
                    <span><strong>Visit Offical Site:</strong> <a href="{{ url($json->body->officialSite) }}" target="_blank">{{ $json->body->name }}</a></span>
                </div>
            </div>
        </div>
        <div class="clear clearfix"></div>
        <div class="col-sm-12 bottom-info"><a href="{{ url('site/task2') }}">View all running shows</a></div>
    </div>
</div>
@endsection