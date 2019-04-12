@extends('admin.layouts.app')

@section('content')


<h2 class="page-header">Edit Service</h2>
  @include('admin.layouts._partials.messages.info')

  <div class="row">
      <div class="col-md-12">
          @if(count($errors))
              <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
          @endif
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">

            <form method="post" action="{{route('service.update', $data->id)}}"  id="slider-form" enctype="multipart/form-data">

              {{csrf_field()}}
              <input type="hidden" name="_method" value="put">
              <div class="box-body">
            <div class="row">
              <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" value="{{$data->title}}" name="title" id="service-title" placeholder="Enter Service Name">
                  {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slug</label> (It will generated automatically.)
                  <input type="text" class="form-control" value="{{$data->slug}}" name="slug"  id="service-slug" placeholder="Slug">
                  {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
              </div>

              <div class="form-group col-md-12">
               <label for="exampleInputPassword1">Description *</label>
                 <br>
               <textarea name="description" rows="5" cols="190" placeholder="Enter Description">{{$data->description}}</textarea>
               {!!$errors->first('description', '<span class="text-danger has-error">:message</span>')!!}
             </div>

            </div>

            <br>
              <button type="submit" class="btn btn-primary">Edit Service</button>
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
    CKEDITOR.replace('description', options);
    CKEDITOR.config.height = 200;

     $(document).ready(function () {
         $("#service-title").change(function () {
             var title = $(this).val();
             $.ajax({
                 type: "get",
                 url: '/admin/service/slug/' + title,
                 cache: false,
                 success: function (result) {
                     $('#service-slug').val(result);
                 }
             });
         });
     });

     </script>



  @endpush





@endsection
