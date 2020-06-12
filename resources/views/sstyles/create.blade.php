@extends('layouts.app')
@section('content')

    <div class="m-5">
        <h2>New Summer Item</h2>
        <form action="/sstyles" method="POST">
            @include('forms.sstyle')
            <button type="submit" class="btn btn-primary">Add Summer Item</button>
        </form>
    </div>

@endsection
