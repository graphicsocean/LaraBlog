<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | LaraBlog by Aziz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="LaraBlog " name="keywords">
    <meta content="Opensource Blog script by Graphics Ocean (Aziz)" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    @include('includes.styles')
    @stack('styles')
    @livewireStyles()
</head>

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    @include('includes.scripts')
    @stack('script')
    @livewireScripts()
</body>

</html>
