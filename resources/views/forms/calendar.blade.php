<div class="form-group">
    <label for="month">Month</label>
    <select class="form-control" id="month" name="month">
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
    <label for="day">Day</label>
    <input id="day" type="text" class="form-control" name="day" value="{{ old('day') }}">
    <div>{{ $errors->first('day') }}</div>
</div>

<div class="form-group">
    <label for="event">Event</label>
    <input id="event" type="text" class="form-control" name="event" value="{{ old('event') }}">
    <div>{{ $errors->first('event') }}</div>
</div>

@csrf
