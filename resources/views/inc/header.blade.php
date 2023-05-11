{{-- @section('header') --}}

    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
            <span class="fs-4">Example</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('home')}}">Home</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('about')}}">About</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('contact')}}">Contact</a>
            <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('contact-data')}}">Post</a>
        </nav>
    </div>
