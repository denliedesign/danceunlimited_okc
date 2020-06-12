@extends('layouts.app')
@section('content')

<div class="container" id="create-menu">
        <div class="p-3">
            <h2>New Calendar Item</h2>
            <form action="/calendars" method="POST">
                @include('forms.calendar')
                <button type="submit" class="btn btn-primary">Add Calendar Item</button>
            </form>
        </div>
</div>

@endsection
