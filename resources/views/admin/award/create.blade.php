@extends('admin.layouts.app')

@section('content')


<h2 class="page-header">Add Award </h2>
  @include('admin.layouts._partials.messages.info')

  <div class="row">
      <div class="col-md-12">
          @if(count($errors))
              <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
          @endif
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">

            <form method="post" action="{{route('award.store')}}"  id="slider-form" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Name *</label>
                <input type="text" class="form-control" value="{{old('name')}}" name="name" id="country-name" placeholder="Enter Award Name">
                  {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
              </div>

              <div class="form-group col-md-6">
                  <label for="exampleInputFile">Image *</label>
                  <input type="file" id="inputFile" name="image" onchange="loadFile(event)">
                  <br>
                  <img src="" alt="preview image" id="output" height="150px" width="150px"> <br>
                  {!!$errors->first('image', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-12">
               <label for="exampleInputPassword1">Description *</label>
                 <br>
               <textarea name="description" rows="5" cols="190" placeholder="Enter Description">{{old('description')}}</textarea>
               {!!$errors->first('description', '<span class="text-danger has-error">:message</span>')!!}
             </div>

            </div>
            <br>
              <button type="submit" class="btn btn-primary">Add Award</button>
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
