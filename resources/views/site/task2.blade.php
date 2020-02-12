@extends('layouts.app')
@section('pageTitle', 'Today\'s US Network TV Shows/Programs')

@section('content')
<div class="task2-page">
    <h1>Today's US Network TV Shows/Programs</h1>
    <ul class="list-unstyled">
        @foreach ($json->body as $row)
            <li class="media">
                <a href="{{ url('site/show/'.$row->show->id) }}" class=""><img src="{{ $row->show->image->medium }}" class="mr-3 show-img" /></a>
                <div class="media-body">
                    <a href="{{ url('site/show/'.$row->show->id) }}" class=""><h5 class="mt-0 mb-1">{{ $row->show->name }}</h5></a>
                    {{ substr(strip_tags($row->show->summary), 0, 200) }}...<br /><a href="{{ url('site/show/'.$row->show->id) }}" class="">More</a>
                    <h6 class="show-schedule mt-2 mb-2"><span class="show-time">{{ date('h:i A', strtotime($row->show->schedule->time)) }}</span> On <span class="show-network">{{ $row->show->network->name }}</span></h6>
                </div>
            </li>
        @endforeach
    </ul>
</div>
@endsection