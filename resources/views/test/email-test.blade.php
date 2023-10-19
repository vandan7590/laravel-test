@extends('auth.layouts')
@section('content')
    <div class="container-fluid">
        <form method="POST" action="{{ route('send.email') }}" class="mt-5">
            @csrf
            <div class="row mb-3">
                <div class="col text-end">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Submit</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">EMAIL</span>
                        <input type="text" class="form-control" id="basic-url" name="email">
                    </div>
                    <div class="input-group mb-2">
                        <span class="input-group-text" style="width: 200px" id="basic-addon3">Message</span>
                        <textarea class="form-control" id="basic-url" name="message" rows="4"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
