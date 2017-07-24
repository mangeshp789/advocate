@extends("layouts.admin")
@section("content")
 <div class="main-content">
        <div class="page-title">
            <div class="title">File Upload</div>
            <div class="sub-title">ProFile</div>
        </div>
            @if(session()->has('msg'))
                <div class="alert alert-success">
                    <strong>{{session()->get('msg')}}</strong>
                </div>
            @endif
        <form id="filesupload" enctype="multipart/form-data" action="{{route('admin.client.uploadProfile')}}" method="post" class="form-horizontal" role="form">
            {{csrf_field()}}
          	<div class="row">
          		<input type="file" name="uploadtestfile">
          		<input type="submit" name="fileUploadbtn" value="submit" class="btn btn-primary">
          	</div>

        </form>
    </div>
@endsection("content")