@foreach($fstyles->unique('title') as $fstyle)
    @switch($fstyle->title)
        @case('Starlette and Acro')
        <div class="my-2">
            <div class="dress-box py-3" id="spotlight-schedule">
                <p class="lead text-center" style="font-size: 1.33em;">Starlette & Acro Ages 3 &^</p>
                <div class="table-responsive px-4">
                    <table class="table">
                        <tbody>

                        @break
                        @endswitch
                        @endforeach
                        @foreach($fstyles as $fstyle)
                            @switch($fstyle->title)
                                @case('Starlette and Acro')
                                <tr>

                                    <th>{{ $fstyle->class }}</th>
                                    <td>{{ $fstyle->age }}</td>
                                    <td>{{ $fstyle->day }}</td>
                                    <td>{{ $fstyle->time }}</td>
                                    <td>
                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                           target="_blank">
                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                        </a></td>
                                    @can('update', \App\Fstyle::class) <td><p><a href="/fstyles/{{ $fstyle->id }}">Edit</a></p></td> @endcan
                                </tr>
                                @break
                            @endswitch
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@foreach($fstyles->unique('title') as $fstyle)
    @switch($fstyle->title)
        @case('Ballet & Jazz')
        <div class="my-2">
            <div class="dress-box py-3" id="spotlight-schedule">
                <p class="lead text-center" style="font-size: 1.33em;">Jr. & Teen Ballet/Jazz - Ages 8 &^</p>
                <div class="table-responsive px-4">
                    <table class="table">
                        <tbody>

                        @break
                        @endswitch
                        @endforeach
                        @foreach($fstyles as $fstyle)
                            @switch($fstyle->title)
                                @case('Ballet & Jazz')
                                <tr>

                                    <th>{{ $fstyle->class }}</th>
                                    <td>{{ $fstyle->age }}</td>
                                    <td>{{ $fstyle->day }}</td>
                                    <td>{{ $fstyle->time }}</td>
                                    <td>
                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                           target="_blank">
                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                        </a></td>
                                    @can('update', \App\Fstyle::class) <td><p><a href="/fstyles/{{ $fstyle->id }}">Edit</a></p></td> @endcan
                                </tr>
                                @break
                            @endswitch
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($fstyles->unique('title') as $fstyle)
            @switch($fstyle->title)
                @case('Hip Hop')
                <div class="my-2">
                    <div class="dress-box py-3" id="spotlight-schedule">
                        <p class="lead text-center" style="font-size: 1.33em;">Hip Hop Ages 6 &^</p>
                        <div class="table-responsive px-4">
                            <table class="table">
                                <tbody>

                                @break
                                @endswitch
                                @endforeach
                                @foreach($fstyles as $fstyle)
                                    @switch($fstyle->title)
                                        @case('Hip Hop')
                                        <tr>

                                            <th>{{ $fstyle->class }}</th>
                                            <td>{{ $fstyle->age }}</td>
                                            <td>{{ $fstyle->day }}</td>
                                            <td>{{ $fstyle->time }}</td>
                                            <td>
                                                <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                   target="_blank">
                                                    <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                </a></td>
                                            @can('update', \App\Fstyle::class) <td><p><a href="/fstyles/{{ $fstyle->id }}">Edit</a></p></td> @endcan
                                        </tr>
                                        @break
                                    @endswitch
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @foreach($fstyles->unique('title') as $fstyle)
                    @switch($fstyle->title)
                        @case('Tap')
                        <div class="my-2">
                            <div class="dress-box py-3" id="spotlight-schedule">
                                <p class="lead text-center" style="font-size: 1.33em;">Tap Ages 8 &^</p>
                                <div class="table-responsive px-4">
                                    <table class="table">
                                        <tbody>

                                        @break
                                        @endswitch
                                        @endforeach
                                        @foreach($fstyles as $fstyle)
                                            @switch($fstyle->title)
                                                @case('Tap')
                                                <tr>

                                                    <th>{{ $fstyle->class }}</th>
                                                    <td>{{ $fstyle->age }}</td>
                                                    <td>{{ $fstyle->day }}</td>
                                                    <td>{{ $fstyle->time }}</td>
                                                    <td>
                                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                           target="_blank">
                                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                        </a></td>
                                                    @can('update', \App\Fstyle::class) <td><p><a href="/fstyles/{{ $fstyle->id }}">Edit</a></p></td> @endcan
                                                </tr>
                                                @break
                                            @endswitch
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                                @foreach($fstyles->unique('title') as $fstyle)
                                    @switch($fstyle->title)
                                        @case('Acting')
                                        <div class="my-2">
                                            <div class="dress-box py-3" id="spotlight-schedule">
                                                <p class="lead text-center" style="font-size: 1.33em;">{{ $fstyle->title }}</p>
                                                <div class="table-responsive px-4">
                                                    <table class="table">
                                                        <tbody>

                                                        @break
                                                        @endswitch
                                                        @endforeach
                                                        @foreach($fstyles as $fstyle)
                                                            @switch($fstyle->title)
                                                                @case('Acting')
                                                                <tr>

                                                                    <th>{{ $fstyle->class }}</th>
                                                                    <td>{{ $fstyle->age }}</td>
                                                                    <td>{{ $fstyle->day }}</td>
                                                                    <td>{{ $fstyle->time }}</td>
                                                                    <td>
                                                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                                           target="_blank">
                                                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                                        </a></td>
                                                                    @can('update', \App\Fstyle::class) <td><p><a href="/fstyles/{{ $fstyle->id }}">Edit</a></p></td> @endcan
                                                                </tr>
                                                                @break
                                                            @endswitch
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


