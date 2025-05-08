<!DOCTYPE html>
<html lang="en">
@include('layouts.head')

<body class="d-flex flex-column min-vh-100 bg-light">
<main class="flex-fill">
    @include('layouts.header')
    @yield('content')
</main>
    {{-- bootstrap --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js">
    </script>
</body>
@include('layouts.footer')

</html>
