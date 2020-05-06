<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
@include('backend.inc.top_link')

<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    @include('backend.inc.header')
 <!-- start page container -->
<div class="page-container">
    <!-- start sidebar menu -->
@include('backend.inc.sidebar')
<!-- end sidebar menu -->
@yield('body')

<!-- start right sidebar sidebar -->
@include('backend.inc.right_sidebar')

<!-- end chat sidebar -->
</div>
<!-- end page container -->
</div>
@include('backend.inc.footer')
</body>
</html>