@foreach($sstyles->unique('title') as $sstyle)
    @switch($sstyle->title)
        @case('Ballet & Jazz')
        <div class="my-2">
            <div class="dress-box py-3" id="spotlight-schedule">
                <p class="lead text-center">{{ $sstyle->title }}</p>
                <div class="table-responsive px-4">
                    <table class="table">
                        <tbody>

                        @break
                        @endswitch
                        @endforeach
                        @foreach($sstyles as $sstyle)
                            @switch($sstyle->title)
                                @case('Ballet & Jazz')
                                <tr>

                                    <th>{{ $sstyle->class }}</th>
                                    <td>{{ $sstyle->age }}</td>
                                    <td>{{ $sstyle->day }}</td>
                                    <td>{{ $sstyle->time }}</td>
                                    <td>
                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                           target="_blank">
                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                        </a></td>
                                    @can('update', \App\Sstyle::class) <td><p><a href="/sstyles/{{ $sstyle->id }}">Edit</a></p></td> @endcan
                                </tr>
                                @break
                            @endswitch
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($sstyles->unique('title') as $sstyle)
            @switch($sstyle->title)
                @case('Hip Hop')
                <div class="my-2">
                    <div class="dress-box py-3" id="spotlight-schedule">
                        <p class="lead text-center">{{ $sstyle->title }}</p>
                        <div class="table-responsive px-4">
                            <table class="table">
                                <tbody>

                                @break
                                @endswitch
                                @endforeach
                                @foreach($sstyles as $sstyle)
                                    @switch($sstyle->title)
                                        @case('Hip Hop')
                                        <tr>

                                            <th>{{ $sstyle->class }}</th>
                                            <td>{{ $sstyle->age }}</td>
                                            <td>{{ $sstyle->day }}</td>
                                            <td>{{ $sstyle->time }}</td>
                                            <td>
                                                <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                   target="_blank">
                                                    <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                </a></td>
                                            @can('update', \App\Sstyle::class) <td><p><a href="/sstyles/{{ $sstyle->id }}">Edit</a></p></td> @endcan
                                        </tr>
                                        @break
                                    @endswitch
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @foreach($sstyles->unique('title') as $sstyle)
                    @switch($sstyle->title)
                        @case('Tap')
                        <div class="my-2">
                            <div class="dress-box py-3" id="spotlight-schedule">
                                <p class="lead text-center">{{ $sstyle->title }}</p>
                                <div class="table-responsive px-4">
                                    <table class="table">
                                        <tbody>

                                        @break
                                        @endswitch
                                        @endforeach
                                        @foreach($sstyles as $sstyle)
                                            @switch($sstyle->title)
                                                @case('Tap')
                                                <tr>

                                                    <th>{{ $sstyle->class }}</th>
                                                    <td>{{ $sstyle->age }}</td>
                                                    <td>{{ $sstyle->day }}</td>
                                                    <td>{{ $sstyle->time }}</td>
                                                    <td>
                                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                           target="_blank">
                                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                        </a></td>
                                                    @can('update', \App\Sstyle::class) <td><p><a href="/sstyles/{{ $sstyle->id }}">Edit</a></p></td> @endcan
                                                </tr>
                                                @break
                                            @endswitch
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        @foreach($sstyles->unique('title') as $sstyle)
                            @switch($sstyle->title)
                                @case('Starlette and Acro')
                                <div class="my-2">
                                    <div class="dress-box py-3" id="spotlight-schedule">
                                        <p class="lead text-center">{{ $sstyle->title }}</p>
                                        <div class="table-responsive px-4">
                                            <table class="table">
                                                <tbody>

                                                @break
                                                @endswitch
                                                @endforeach
                                                @foreach($sstyles as $sstyle)
                                                    @switch($sstyle->title)
                                                        @case('Starlette and Acro')
                                                        <tr>

                                                            <th>{{ $sstyle->class }}</th>
                                                            <td>{{ $sstyle->age }}</td>
                                                            <td>{{ $sstyle->day }}</td>
                                                            <td>{{ $sstyle->time }}</td>
                                                            <td>
                                                                <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"
                                                                   target="_blank">
                                                                    <button class="btn btn-danger btn-sm mr-3">ENROLL</button>
                                                                </a></td>
                                                            @can('update', \App\Sstyle::class) <td><p><a href="/sstyles/{{ $sstyle->id }}">Edit</a></p></td> @endcan
                                                        </tr>
                                                        @break
                                                    @endswitch
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


