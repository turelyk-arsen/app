@extends('layouts.app')

@section('title-block')
    Update page
@endsection

@section('content')
    <h1>Update page</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value='{{ $data->name }}' placeholder="name" id="name"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" value='{{ $data->email }}' id="email"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="subject" value='{{ $data->subject }}' id="subject"
                class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="message">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
