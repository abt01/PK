
<!DOCTYPE html>
<html lang="en">
@include('layouts.home.head')

<body class="common-home res layout-home2 banners-effect-7">
<div id="wrapper" class="wrapper-full">


      @include('layouts.home.header')

        <!-- Main Container  -->
        <div class="main-container container">

            @include('layouts.home.content')
        </div>
    <!-- //Main Container -->

    <script type="text/javascript">
        <!--
        var $typeheader = 'header-home2';
        //-->
    </script>

    <!-- Footer Container -->
    @include('layouts.footer')
    @include('layouts.footer-bottom')

</div>
</div>




</body>
</html>
