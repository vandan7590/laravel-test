<!-- resources/views/contact.blade.php -->
@extends('layouts.app') <!-- Extending the layout with Bootstrap -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="POST" action="{{ route('send.email') }}" class="mt-5">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
