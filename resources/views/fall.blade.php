@extends('layouts.app')

@section('title', 'Fall 2020 | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Fall 2020</p>
{{--        <p class="text-center font-weight-bold my-0">June 15th-July 30th</p>--}}
        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>
        <h1 class="txt-black-title pt-5">Fall Schedule</h1>
        <div class="row row-cols-1 row-cols-md-2">
            @include('fstyles')
        </div>

        @can('update', \App\Fstyle::class)
            <div class="p-3">
                <h2>New Fall Style</h2>
                <form action="fstyles" method="POST">
                    @include('forms.style')
                    <button type="submit" class="btn btn-primary">Add Style</button>
                </form>
            </div>
        @endcan

    </div>

@endsection
