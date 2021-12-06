@include('admin.includes.header')

<div class="container-fluid">
    <div class="row">
        @include('admin.includes.nav')
        @yield('main-content')

    </div>

</div>
@include('admin.includes.footer')
