<div class="form-group">
    <label for="title">Style</label>
    <select class="form-control" id="title" name="title">
        <option value="{{ $fstyle->title }}">{{ $fstyle->title }}</option>
        <option value="Ballet & Jazz">Ballet & Jazz</option>
        <option value="Hip Hop">Hip Hop</option>
        <option value="Tap">Tap</option>
        <option value="Starlette and Acro">Starlette and Acro</option>
        <option value="Acting">Acting</option>
    </select>
</div>

<div class="form-group">
    <label for="class">Class</label>
    <input id="class" type="text" class="form-control" name="class" value="{{ old('class') ?? $fstyle->class }}">
    <div>{{ $errors->first('class') }}</div>
</div>

<div class="form-group">
    <label for="age">Age</label>
    <input id="age" type="text" class="form-control" name="age" value="{{ old('age') ?? $fstyle->age }}">
    <div>{{ $errors->first('age') }}</div>
</div>

<div class="form-group">
    <label for="day">Day</label>
    <input id="day" type="text" class="form-control" name="day" value="{{ old('day') ?? $fstyle->day }}">
    <div>{{ $errors->first('day') }}</div>
</div>

<div class="form-group">
    <label for="time">Time</label>
    <input id="time" type="text" class="form-control" name="time" value="{{ old('time') ?? $fstyle->time }}">
    <div>{{ $errors->first('time') }}</div>
</div>

@csrf
