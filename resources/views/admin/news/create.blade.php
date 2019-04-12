@extends('admin.layouts.app')

@section('content')

    <!-- START CUSTOM TABS -->
    <h2 class="page-header">Add News</h2>
    @include('admin.layouts._partials.messages.info')

    <div class="row">
        <div class="col-md-12">
            @if(count($errors))
                <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
        @endif
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">

                <form method="post" action="/admin/news"  id="slider-form" enctype="multipart/form-data">


                    {{csrf_field()}}

                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title *</label>
                            <input type="text" class="form-control" value="{{old('title')}}" name="title" id="news-title" placeholder="Enter Title">
                            {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug *</label> (It will generated automatically.)
                            <input type="text" class="form-control" value="{{old('slug')}}" name="slug"  id="news-slug" placeholder="Enter Slug">
                            {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description *</label>
                            <br>
                            <textarea name="description" rows="5" cols="190" placeholder="Enter Description">{{old('description')}}</textarea>
                            {!!$errors->first('description', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Body *</label>
                            <br>
                            <textarea name="body" id="ck-vai" placeholder="Enter Body">{{old('body')}}</textarea>
                            {!!$errors->first('body', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="published">Published</label>
                            <br>
                            <input type="checkbox" class="form-control" name="published" id="published1">


                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="inputFile" name="image" onchange="loadFile(event)">
                            <br>
                            <img src="" alt="preview image" id="output" height="150px" width="150px">
                            {!!$errors->first('image', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Add News</button>
                    </div>

                </form>


            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>

    @push('scripts')

    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
          <script>
          var options = {
           filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
           filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
           filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
           filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
         };
         CKEDITOR.replace('body', options);

            $(document).ready(function () {
                $("#news-title").change(function () {
                    var title = $(this).val();
                    $.ajax({
                        type: "get",
                        url: '/admin/news/slug/' + title,
                        cache: false,
                        success: function (result) {
                            $('#news-slug').val(result);
                        }
                    });
                });
            });

            var loadFile = function(event) {
              var reader = new FileReader();
              reader.onload = function(){
                var output = document.getElementById('output');
                output.src = reader.result;
              };
              reader.readAsDataURL(event.target.files[0]);
            };

        </script>

    @endpush
@endsection
