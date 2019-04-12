@extends('admin.layouts.app')

@section('content')

    <!-- START CUSTOM TABS -->
    <h2 class="page-header">Edit News</h2>
    @include('admin.layouts._partials.messages.info')

    <div class="row">
        <div class="col-md-12">
            @if(count($errors))
                <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
        @endif
        <!-- Custom Tabs -->
            <div class="nav-tabs-custom">

                <form method="post" action="/admin/news/{{$data->id}}"  id="slider-form" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title *</label>
                            <input type="text" class="form-control" name="title" id="news-title" value="{{$data->title}}" placeholder="Enter Title">
                            {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Slug *</label>
                            <input type="text" class="form-control" name="slug" id="news-slug" value="{{$data->slug}}" placeholder="Enter Slug">
                            {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <br>
                            <textarea name="description" id="" cols="190" rows="5" placeholder="Enter Description">{{$data->description}}</textarea>
                            {!!$errors->first('description', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Body</label>
                            <br>
                            <textarea name="body" id="" placeholder="Enter Body">{{$data->body}}</textarea>
                            {!!$errors->first('body', '<span class="text-danger has-error">:message</span>')!!}
                        </div>
                        <div class="form-group">
                            <label for="publish"><input type="checkbox" id="publish" name="published" {{$data->published==1?'checked':''}}> Publish </label>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="inputFile" value="{{$data->image}}" name="image" onchange="loadFile(event)">
                            <br>
                            <img src="/uploads/news/{{$data->image}}" id="output" alt="slider Image" height="100px" width="100px">
                            {!!$errors->first('image', '<span class="text-danger has-error">:message</span>')!!}
                            <!-- <p class="help-block">Example block-level help text here.</p> -->
                        </div>
                        <!--  <div class="checkbox">
                           <label>
                             <input type="checkbox"> Check me out
                           </label>
                         </div> -->

                        <!-- /.box-body -->
                        <br>
                        <button type="submit" class="btn btn-primary">Edit News</button>
                    </div>
                </form>
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
@endsection


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
