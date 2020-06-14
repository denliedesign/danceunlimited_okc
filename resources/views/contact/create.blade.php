<p class="nav-title">Message</p>
<form action="{{ route('contact.store') }}" method="POST">
    <div class="row">
        <div class="col-sm-6">
            <input type="hidden" name="my_name" id="my_name" value="">
            <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" value="{{ old('name') }}">
                <div>{{ $errors->first('name') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                <div>{{ $errors->first('email') }}</div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3">{{ old('message') }}</textarea>
                <div>{{ $errors->first('message') }}</div>
            </div>
            @csrf
            <button type="submit" class="btn btn-danger mb-3">SUBMIT</button>
        </div>
    </div>
</form>
