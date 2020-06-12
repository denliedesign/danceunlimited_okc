<div class="form-group">
    <label for="month">Month</label>
    <select class="form-control" id="month" name="month">
        <option value="{{ $calendar->month }}">{{ $calendar->month }}</option>
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
</div>

<div class="form-group">
    <label for="startday">Start Day</label>
    <input id="startday" type="text" class="form-control" name="startday" value="{{ $calendar->startday }}">
    <div>{{ $errors->first('startday') }}</div>
</div>

<div class="form-group">
    <label for="endday">End Day (Optional)</label>
    <input id="endday" type="text" class="form-control" name="endday" value="{{ $calendar->endday }}">
    <div>{{ $errors->first('endday') }}</div>
</div>

<div class="form-group">
    <label for="event">Event</label>
    <input id="event" type="text" class="form-control" name="event" value="{{ $calendar->event }}">
    <div>{{ $errors->first('event') }}</div>
</div>

@csrf
