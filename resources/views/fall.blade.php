@extends('layouts.app')

@section('title', 'Fall 2020 | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Fall 2020</p>
        @can('update', \App\Fstyle::class)
            <p class="text-center"><a href="/fstyles/create">New Fall Item</a></p>
        @endcan
        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>
        <h1 class="txt-black-title pt-5">Fall Schedule</h1>
        <div class="card-columns">
            @include('fstyles')
        </div>
    </div>

@endsection
