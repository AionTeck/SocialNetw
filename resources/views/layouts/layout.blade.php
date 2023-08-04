@include('inc.header')
<div class="container text-center">
    <div class="row">
        <div class="col-4">
            @include('inc.aside')
        </div>
        <div class="col-8">
            @yield('content')
        </div>
    </div>
</div>
@include('inc.footer')
