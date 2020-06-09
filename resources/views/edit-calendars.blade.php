
    @can('update', $calendar)
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit
        </button>
        <div class="dropdown-menu" aria-labelledby="dLabel">
            <div class="d-flex justify-content-around align-items-end">
                <div>
                    <form action="{{ route('calendars.update', ['calendar' => $calendar]) }}"
                          method="POST" class="p-3">
                        @method('PATCH')
                        @include('forms.calendar')

                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>

            <div>
                <form action="calendars/{{ $calendar->id }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger ml-3" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endcan
