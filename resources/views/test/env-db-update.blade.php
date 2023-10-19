<!-- resources/views/contact.blade.php -->
@extends('auth.layouts') <!-- Extending the layout with Bootstrap -->

@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('env-db-update.send') }}" class="mt-5">
            @csrf
            <div class="row mb-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col ">
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB CONNECTION</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_CONNECTION]"
                            value="{{ $envData['DB_CONNECTION'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB HOST</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_HOST]"
                            value="{{ $envData['DB_HOST'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB PORT</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_PORT]"
                            value="{{ $envData['DB_PORT'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB DATABASE</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_DATABASE]"
                            value="{{ $envData['DB_DATABASE'] }}">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB USERNAME</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_USERNAME]"
                            value="{{ $envData['DB_USERNAME'] }}">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">DB PASSWORD</span>
                        <input type="text" class="form-control" id="basic-url" name="--ff[DB_PASSWORD]"
                            value="{{ $envData['DB_PASSWORD'] }}">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
