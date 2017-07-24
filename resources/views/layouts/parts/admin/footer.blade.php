</div>{{-- end main panel topheader.blade--}}
<!-- bottom footer -->
<footer class="content-footer">
    <nav class="footer-right">
        <ul class="nav">
            <li>
                <a href="javascript:;">Feedback</a>
            </li>
            <li>
                <a href="javascript:;" class="scroll-up">
                    <i class="fa fa-angle-up"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="footer-left hidden-xs">
        <ul class="nav">
            <li>
                <a href="javascript:;"><span>About</span> Reactor</a>
            </li>
            <li>
                <a href="javascript:;">Privacy</a>
            </li>
            <li>
                <a href="javascript:;">Terms</a>
            </li>
            <li>
                <a href="javascript:;">Help</a>
            </li>
        </ul>
    </nav>
</footer>
</div>
<!-- /bottom footer -->

<!-- build:js({.tmp,app}) scripts/app.min.js -->

<script src="{{asset('asset/scripts/helpers/modernizr.js')}}"></script>
<script src="{{asset('asset/vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('asset/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{asset('asset/vendor/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('asset/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('asset/scripts/helpers/smartresize.js')}}"></script>
<script src="{{asset('asset/scripts/constants.js')}}"></script>
<script src="{{asset('asset/scripts/main.js')}}"></script>
<script src="{{asset('asset/vendor/chosen_v1.4.0/chosen.jquery.min.js')}}"></script>
<script src="{{asset('asset/vendor/card/lib/js/jquery.card.js')}}"></script>
<script src="{{asset('asset/vendor/checkbo/src/0.1.4/js/checkBo.min.js')}}"></script>
<script src="{{asset('asset/vendor/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{asset('asset/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('asset/scripts/forms/wizard.js')}}"></script>
<script src="{{asset('asset/scripts/bootstrap-dialog.js')}}"></script>
<script src="{{asset('asset/scripts/tinymce/tinymce.min.js')}}"></script>

<!-- page scripts -->
<script src="{{asset('asset/vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
<!-- end page scripts -->
<!-- initialize page scripts -->
<script src="{{asset('asset/scripts/helpers/bootstrap-datatables.js')}}"></script>
<script src="{{asset('asset/scripts/tables/table-edit.js')}}"></script>
<!-- end initialize page scripts -->

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="{{asset('asset/scripts/jquery-vaildate.js')}}"></script>
@yield('extra_js')
