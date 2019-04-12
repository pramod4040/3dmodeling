@extends('admin.layouts.app')

@section('content')


<h2 class="page-header">Add Product </h2>
  @include('admin.layouts._partials.messages.info')

  <div class="row">
      <div class="col-md-12">
          @if(count($errors))
              <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
          @endif
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">

            <form method="post" action="{{route('product.store')}}"  id="slider-form" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" value="{{old('name')}}" name="name" id="country-name" placeholder="Enter Country Name">
                  {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Category</label>
                  <select class="form-control col-md-6" name="category_id">
                    <option value="">--select one--</option>
                    @foreach(\App\Models\Category::selectList() as $index=>$cate)
                    <option value="{{$cate->id}}">{{$cate->title}}</option>
                    @endforeach
                  </select> <br>
                {!!$errors->first('category_id', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-6">
                  <label for="exampleInputFile">Banner Image</label>
                  <input type="file" id="inputFile" name="banner_image" onchange="loadFile(event)">
                  <br>
                  <img src="" alt="preview image" id="output" height="150px" width="150px"> <br>
                  {!!$errors->first('banner_image', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-12">
               <label for="exampleInputPassword1">Description *</label>
                 <br>
               <textarea name="description" rows="5" cols="190" placeholder="Enter Description">{{old('description')}}</textarea>
               {!!$errors->first('description', '<span class="text-danger has-error">:message</span>')!!}
             </div>

             <div class="form-group col-md-12">
              <label for="exampleInputPassword1">Specification *</label>
                <br>
              <textarea name="specification" rows="5" cols="190" placeholder="Enter Specification">{{old('specification')}}</textarea>
              {!!$errors->first('specification', '<span class="text-danger has-error">:message</span>')!!}
            </div>

            <div class="form-group col-md-12">
             <label for="exampleInputPassword1">Other Information *</label>
               <br>
             <textarea name="other_information" rows="5" cols="190" placeholder="Enter Specification">{{old('other_information')}}</textarea>
             {!!$errors->first('other_information', '<span class="text-danger has-error">:message</span>')!!}
           </div>

            </div>

            <br>
              <button type="submit" class="btn btn-primary">Add Product</button>
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
 CKEDITOR.replace('specification', options);
 CKEDITOR.replace('other_information', options);

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
