@extends('layouts.app')

@section('title-block')
    Contact page
@endsection

@section('content')
    <h1>Contact page</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, id repudiandae aliquam facilis eaque illo dolores
        dolor quis aspernatur aperiam et totam maiores optio, deleniti earum perferendis. Voluptatum soluta reiciendis
        corrupti? Laborum molestias magnam nulla eligendi iure accusamus rem est?</p>

    @if ($errors->any)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erorr)
                    <li>{{ $erorr }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" placeholder="subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
