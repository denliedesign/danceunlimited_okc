@extends('layouts.app')
@section('content')

            <div class="m-5">
                <div>
                    <form action="{{ route('calendars.update', ['calendar' => $calendar]) }}"
                          method="POST" class="p-3">
                        @method('PATCH')
                        @include('forms.calendar')

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
                <hr>
                <div class="d-flex justify-content-end">
                    <form action="{{ $calendar->id }}" method="POST">
                        @method('DELETE')
                        @csrf

                        <button class="btn btn-danger ml-3" type="submit">Delete</button>
                    </form>
                </div>
            </div>


@endsection
