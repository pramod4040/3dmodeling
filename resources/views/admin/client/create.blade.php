@extends('admin.layouts.app')

@section('content')


<h2 class="page-header">Add Client </h2>
  @include('admin.layouts._partials.messages.info')

  <div class="row">
      <div class="col-md-12">
          @if(count($errors))
              <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
          @endif
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">

            <form method="post" action="{{route('client.store')}}"  id="slider-form" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="box-body">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Client</label>
                <input type="text" class="form-control" value="{{old('name')}}" name="name" id="country-name" placeholder="Enter Client Name">
                  {!!$errors->first('name', '<span class="text-danger has-error">:message</span>')!!}
              </div>

              <div class="form-group col-md-6">
                  <label for="exampleInputFile">Logo</label>
                  <input type="file" id="inputFile" name="logo" onchange="loadFile1(event)">
                  <br>
                  <img src="" alt="preview image" id="output1" height="150px" width="150px"> <br>
                  {!!$errors->first('logo', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              
              <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Link</label>
                <input type="text" class="form-control" value="{{old('link')}}" name="link" id="country-name" placeholder="Enter Client's Website/link">
                  {!!$errors->first('link', '<span class="text-danger has-error">:message</span>')!!}
              </div>
            </div>

            <br>
              <button type="submit" class="btn btn-primary">Add Client</button>
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

     var loadFile1 = function(event) {
       var reader = new FileReader();
       reader.onload = function(){
         var output = document.getElementById('output1');
         output.src = reader.result;
       };
       reader.readAsDataURL(event.target.files[0]);
     };


          var loadFile2 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output2');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };

     </script>



  @endpush




@endsection
