<!-- start footer -->
<div class="page-footer">
    <div class="page-footer-inner"> 2018 &copy; Spice Hotel Template By
        <a href="mailto:redstartheme@gmail.com" target="_top" class="makerCss">RedStar Theme</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- end footer -->

<!-- start js include path -->
<script src="{{asset('backend/assets/plugins/jquery/jquery.min.js')}}" ></script>
<script src="{{asset('backend/assets/plugins/popper/popper.min.js')}}" ></script>
<script src="{{asset('backend/assets/plugins/jquery-blockui/jquery.blockui.min.js')}}" ></script>
<script src="{{asset('backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}" ></script>
<script src="{{asset('backend/assets/plugins/sparkline/jquery.sparkline.min.js')}}" ></script>
<script src="{{asset('backend/assets/js/pages/sparkline/sparkline-data.js')}}" ></script>
<!-- Common js-->
<script src="{{asset('backend/assets/js/app.js')}}" ></script>
<script src="{{asset('backend/assets/js/layout.js')}}" ></script>
<script src="{{asset('backend/assets/js/theme-color.js')}}" ></script>
<!-- material -->
<script src="{{asset('backend/assets/plugins/material/material.min.js')}}"></script>
<!-- animation -->
<script src="{{asset('backend/assets/js/pages/ui/animations.js')}}" ></script>
<!-- morris chart -->
<script src="{{asset('backend/assets/plugins/morris/morris.min.js')}}" ></script>
<script src="{{asset('backend/assets/plugins/morris/raphael-min.js')}}" ></script>
<script src="{{asset('backend/assets/js/pages/chart/morris/morris_home_data.js')}}" ></script>
<!-- end js include path -->

<!-- specific page js -->
@yield('js')