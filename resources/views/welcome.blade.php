@extends('layouts.app')
@section('pageTitle', 'Fastorder')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="row">
        <div class="col-sm-12">
            <div class="title m-b-md">
                Laravel 6.0
            </div>
            <div class="clear clearfix"></div>
            <div class="links">
                <a href="{{ url('site/task1') }}">Task 1</a>
                <a href="{{ url('site/task2') }}">Task 2</a>
            </div>
        </div>
    </div>
</div>
@endsection
