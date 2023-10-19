<!-- resources/views/contact.blade.php -->
@extends('auth.layouts') <!-- Extending the layout with Bootstrap -->

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('env-update.send') }}" class="mt-5">
            @csrf
            <div class="row mb-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                </div>
            </div>
            {{-- @foreach ($envData as $key => $v) --}}
            <div class="row mb-2">
                <div class="col ">
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL MAILER</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_MAILER]"
                            value="{{ $envData['MAIL_MAILER'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL HOST</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_HOST]"
                            value="{{ $envData['MAIL_HOST'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL PORT</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_PORT]"
                            value="{{ $envData['MAIL_PORT'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL USERNAME</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_USERNAME]"
                            value="{{ $envData['MAIL_USERNAME'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL PASSWORD</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_PASSWORD]"
                            value="{{ $envData['MAIL_PASSWORD'] }}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">MAIL ENCRYPTION</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[MAIL_ENCRYPTION]"
                            value="{{ $envData['MAIL_ENCRYPTION'] }}">
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}
        </form>
    </div>
@endsection
