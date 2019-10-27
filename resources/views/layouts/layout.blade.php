<!DOCTYPE html>
<html lang="en">

@include('layouts.head')



<body class="res layout-subpage">
<div id="wrapper" class="wrapper-full ">
    @include('layouts.header')
    <div class="main-container container">

        @yield('content')

    </div>
    @include('layouts.footer')
</div>
@include('layouts.footer-bottom')
</body>
<!-- Footer -->

</html>
