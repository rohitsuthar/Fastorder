@extends('layouts.app')
@section('pageTitle', 'Latest Hacker News')

@section('content')
<div class="task1-page table-responsive">
    <h1>Latest Hacker News</h1>
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Url</th>
                <th scope="col">Comment Count</th>
                <th scope="col">Score</th>
                <th scope="col">Date</th>
                <th scope="col">Posted By</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($json->body->hits as $row)
            <tr>
                <th scope="row">{{ $row->objectID }}</th>
                <td>{{ $row->title }}</td>
                <td>{{ $row->url }}</td>
                <td>{{ $row->num_comments }}</td>
                <td>{{ $row->points }}</td>
                <td>{{ date('Y-m-d', $row->created_at_i) }}</td>
                <td>{{ $row->author }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
