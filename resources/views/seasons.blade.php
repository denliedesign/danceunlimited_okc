<div class="d-flex justify-content-center">
    <div class="row text-center py-2 rounded" id="list-example" style="font-size: 1.25em; background: black; max-width: 666px; min-width: 60%;">
        <div class="col"><a class="text-white" href="#summer">Summer</a></div>
        <div class="col"><a class="text-white" href="#fall">Fall</a></div>
        <div class="col"><a class="text-white" href="#winter">Winter</a></div>
        <div class="col"><a class="text-white" href="#spring">Spring</a></div>
    </div>
</div>
<div data-spy="scroll" data-target="#list-example" data-offset="5" class="scrollspy-example" style="height: 400px; overflow-y: scroll;">

    <div style="position: relative;">
        <div id="summer">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 m-0 p-0">
                <div class="col my-2 px-2">
                    <div class="card season-card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon summer-icon">
                            <ion-icon name="sunny"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">June</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'June')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card season-card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon summer-icon">
                            <ion-icon name="sunny"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">July</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'July')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card season-card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon summer-icon">
                            <ion-icon name="sunny"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">August</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'August')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fall">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 m-0 p-0">
                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon fall-icon">
                            <ion-icon name="leaf"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">September</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'September')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon fall-icon">
                            <ion-icon name="leaf"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">October</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'October')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon fall-icon">
                            <ion-icon name="leaf"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">November</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'November')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="winter">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 m-0 p-0">
                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon winter-icon">
                            <ion-icon name="snow"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">December</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'December')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon winter-icon">
                            <ion-icon name="snow"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">January</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'January')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon winter-icon">
                            <ion-icon name="snow"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">February</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'February')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="spring">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 m-0 p-0">
                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon spring-icon">
                            <ion-icon name="rose"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">March</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'March')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon spring-icon">
                            <ion-icon name="rose"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">April</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'April')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col my-2 px-2">
                    <div class="card" style="max-width: 400px; width: 100%;">
                        <div class="season-icon spring-icon">
                            <ion-icon name="rose"></ion-icon>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-center">May</h5>
                            <table class="table" style="white-space: normal">
                                @foreach($calendars as $calendar)
                                    @if ($calendar->month == 'May')
                                        <tr>
                                            <th>
                                                {{ $calendar->startday }}
                                                @if(!empty($calendar->endday))
                                                    <span
                                                        class="text-muted"> - </span>@endif
                                                {{ $calendar->endday }}
                                            </th>
                                            <td>{{ $calendar->event }}</td>
                                            @can('update', $calendar)
                                                <td><a href="/calendars/{{ $calendar->id }}">Edit</a></td>@endcan
                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
