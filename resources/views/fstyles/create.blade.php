@extends('layouts.app')
@section('content')

    <div class="m-5">
        <h2>New Fall Item</h2>
        <form action="/fstyles" method="POST">
            @include('forms.fstyle')
            <button type="submit" class="btn btn-primary">Add Fall Item</button>
        </form>
    </div>

@endsection
