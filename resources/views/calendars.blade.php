@foreach($calendars->unique('month') as $calendar)
    @switch($calendar->month == 'August')
        @case(1)
        <div class="card"
             style="max-width: 400px; width: 100%;">
            <div class="card-body">
                <h5 class="card-title text-center">August</h5>
                <table class="table"
                       style="white-space: normal">
                    @break
                    @endswitch
                    @endforeach

                    @foreach($calendars as $calendar)
                        @switch($calendar->month)
                            @case('August')
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
                            @break
                        @endswitch
                    @endforeach
                </table>
            </div>
        </div>


        @foreach($calendars->unique('month') as $calendar)
            @switch($calendar->month == 'September')
                @case(1)
                <div class="card"
                     style="max-width: 400px; width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            September</h5>
                        <table class="table"
                               style="white-space: normal">
                            @break
                            @endswitch
                            @endforeach

                            @foreach($calendars as $calendar)
                                @switch($calendar->month)
                                    @case('September')
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
                                    @break
                                @endswitch
                            @endforeach
                        </table>
                    </div>
                </div>


                @foreach($calendars->unique('month') as $calendar)
                    @switch($calendar->month == 'October')
                        @case(1)
                        <div class="card"
                             style="max-width: 400px; width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title text-center">
                                    October</h5>
                                <table class="table"
                                       style="white-space: normal">
                                    @break
                                    @endswitch
                                    @endforeach

                                    @foreach($calendars as $calendar)
                                        @switch($calendar->month)
                                            @case('October')
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
                                            @break
                                        @endswitch
                                    @endforeach
                                </table>
                            </div>
                        </div>


                        @foreach($calendars->unique('month') as $calendar)
                            @switch($calendar->month == 'November')
                                @case(1)
                                <div class="card"
                                     style="max-width: 400px; width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">
                                            November</h5>
                                        <table class="table"
                                               style="white-space: normal">
                                            @break
                                            @endswitch
                                            @endforeach

                                            @foreach($calendars as $calendar)
                                                @switch($calendar->month)
                                                    @case('November')
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
                                                            <td><a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                            </td>@endcan
                                                    </tr>
                                                    @break
                                                @endswitch
                                            @endforeach
                                        </table>
                                    </div>
                                </div>


                                @foreach($calendars->unique('month') as $calendar)
                                    @switch($calendar->month == 'December')
                                        @case(1)
                                        <div class="card"
                                             style="max-width: 400px; width: 100%;">
                                            <div
                                                class="card-body">
                                                <h5 class="card-title text-center">
                                                    December</h5>
                                                <table
                                                    class="table"
                                                    style="white-space: normal">
                                                    @break
                                                    @endswitch
                                                    @endforeach

                                                    @foreach($calendars as $calendar)
                                                        @switch($calendar->month)
                                                            @case('December')
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
                                                                    <td>
                                                                        <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                    </td>@endcan
                                                            </tr>
                                                            @break
                                                        @endswitch
                                                    @endforeach
                                                </table>
                                            </div>
                                        </div>

                                        @foreach($calendars->unique('month') as $calendar)
                                            @switch($calendar->month == 'January')
                                                @case(1)
                                                <div class="card" style="max-width: 400px; width: 100%;">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-center">January</h5>
                                                        <table class="table" style="white-space: normal">
                                                            @break
                                                            @endswitch
                                                            @endforeach

                                                            @foreach($calendars as $calendar)
                                                                @switch($calendar->month)
                                                                    @case('January')
                                                                    <tr>
                                                                        <th>
                                                                            {{ $calendar->startday }}
                                                                            @if(!empty($calendar->endday))<span
                                                                                class="text-muted"> - </span>@endif
                                                                            {{ $calendar->endday }}
                                                                        </th>
                                                                        <td>{{ $calendar->event }}</td>
                                                                        @can('update', $calendar)
                                                                            <td>
                                                                                <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                            </td>@endcan
                                                                    </tr>
                                                                    @break
                                                                @endswitch
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </div>


                                                @foreach($calendars->unique('month') as $calendar)
                                                    @switch($calendar->month == 'February')
                                                        @case(1)
                                                        <div class="card" style="max-width: 400px; width: 100%;">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-center">February</h5>
                                                                <table class="table" style="white-space: normal">
                                                                    @break
                                                                    @endswitch
                                                                    @endforeach

                                                                    @foreach($calendars->sortby('startday') as $calendar)
                                                                        @switch($calendar->month)
                                                                            @case('February')
                                                                            <tr>
                                                                                <th>
                                                                                    {{ $calendar->startday }}
                                                                                    @if(!empty($calendar->endday))<span
                                                                                        class="text-muted"> - </span>@endif
                                                                                    {{ $calendar->endday }}
                                                                                </th>
                                                                                <td>{{ $calendar->event }}</td>
                                                                                @can('update', $calendar)
                                                                                    <td>
                                                                                        <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                    </td>@endcan
                                                                            </tr>
                                                                            @break
                                                                        @endswitch
                                                                    @endforeach
                                                                </table>
                                                            </div>
                                                        </div>


                                                        @foreach($calendars->unique('month') as $calendar)
                                                            @switch($calendar->month == 'March')
                                                                @case(1)
                                                                <div class="card"
                                                                     style="max-width: 400px; width: 100%;">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">March</h5>
                                                                        <table class="table"
                                                                               style="white-space: normal">
                                                                            @break
                                                                            @endswitch
                                                                            @endforeach

                                                                            @foreach($calendars as $calendar)
                                                                                @switch($calendar->month)
                                                                                    @case('March')
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
                                                                                            <td>
                                                                                                <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                            </td>@endcan
                                                                                    </tr>
                                                                                    @break
                                                                                @endswitch
                                                                            @endforeach
                                                                        </table>
                                                                    </div>
                                                                </div>


                                                                @foreach($calendars->unique('month') as $calendar)
                                                                    @switch($calendar->month == 'April')
                                                                        @case(1)
                                                                        <div class="card"
                                                                             style="max-width: 400px; width: 100%;">
                                                                            <div class="card-body">
                                                                                <h5 class="card-title text-center">
                                                                                    April</h5>
                                                                                <table class="table"
                                                                                       style="white-space: normal">
                                                                                    @break
                                                                                    @endswitch
                                                                                    @endforeach

                                                                                    @foreach($calendars as $calendar)
                                                                                        @switch($calendar->month)
                                                                                            @case('April')
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
                                                                                                    <td>
                                                                                                        <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                                    </td>@endcan
                                                                                            </tr>
                                                                                            @break
                                                                                        @endswitch
                                                                                    @endforeach
                                                                                </table>
                                                                            </div>
                                                                        </div>


                                                                        @foreach($calendars->unique('month') as $calendar)
                                                                            @switch($calendar->month == 'May')
                                                                                @case(1)
                                                                                <div class="card"
                                                                                     style="max-width: 400px; width: 100%;">
                                                                                    <div class="card-body">
                                                                                        <h5 class="card-title text-center">
                                                                                            May</h5>
                                                                                        <table class="table"
                                                                                               style="white-space: normal">
                                                                                            @break
                                                                                            @endswitch
                                                                                            @endforeach

                                                                                            @foreach($calendars as $calendar)
                                                                                                @switch($calendar->month)
                                                                                                    @case('May')
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
                                                                                                            <td>
                                                                                                                <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                                            </td>@endcan
                                                                                                    </tr>
                                                                                                    @break
                                                                                                @endswitch
                                                                                            @endforeach
                                                                                        </table>
                                                                                    </div>
                                                                                </div>


                                                                                @foreach($calendars->unique('month') as $calendar)
                                                                                    @switch($calendar->month == 'June')
                                                                                        @case(1)
                                                                                        <div class="card"
                                                                                             style="max-width: 400px; width: 100%;">
                                                                                            <div class="card-body">
                                                                                                <h5 class="card-title text-center">
                                                                                                    June</h5>
                                                                                                <table class="table"
                                                                                                       style="white-space: normal">
                                                                                                    @break
                                                                                                    @endswitch
                                                                                                    @endforeach

                                                                                                    @foreach($calendars as $calendar)
                                                                                                        @switch($calendar->month)
                                                                                                            @case('June')
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
                                                                                                                    <td>
                                                                                                                        <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                                                    </td>@endcan
                                                                                                            </tr>
                                                                                                            @break
                                                                                                        @endswitch
                                                                                                    @endforeach
                                                                                                </table>
                                                                                            </div>
                                                                                        </div>


                                                                                        @foreach($calendars->unique('month') as $calendar)
                                                                                            @switch($calendar->month == 'July')
                                                                                                @case(1)
                                                                                                <div class="card"
                                                                                                     style="max-width: 400px; width: 100%;">
                                                                                                    <div
                                                                                                        class="card-body">
                                                                                                        <h5 class="card-title text-center">
                                                                                                            July</h5>
                                                                                                        <table
                                                                                                            class="table"
                                                                                                            style="white-space: normal">
                                                                                                            @break
                                                                                                            @endswitch
                                                                                                            @endforeach

                                                                                                            @foreach($calendars as $calendar)
                                                                                                                @switch($calendar->month)
                                                                                                                    @case('July')
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
                                                                                                                            <td>
                                                                                                                                <a href="/calendars/{{ $calendar->id }}">Edit</a>
                                                                                                                            </td>@endcan
                                                                                                                    </tr>
                                                                                                                    @break
                                                                                                                @endswitch
                                                                                                            @endforeach
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
