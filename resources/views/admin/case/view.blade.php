@extends("layouts.admin")
@section("content")
    <!-- main area -->
    <div class="main-content">
        <div class="page-title">
            <div class="title">ADD NEW CLIENT</div>
            <div class="sub-title">Follow Steps</div>
        </div>
        @if(session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif

        <form id="wizardForm" method="post" action="{{route("admin.client.create")}}"  class="form-horizontal" role="form">
            {{csrf_field()}}
            <div class="form-group">
                   <textarea rows="50" cols="10" class="tinymce">{{asset('asset/admin/LAnd.txt')}}</textarea>
            </div>
        </form>
    </div>
    <!-- /main area -->

@endsection("content")
@section("extra_js")
    <script type="text/javascript">
        $(function () {
            tinymce.init({
                selector: 'textarea'  // change this value according to your HTML
                //auto_focus: 'element1'
            });
        });

    </script>
    @endsection("extra_js)
