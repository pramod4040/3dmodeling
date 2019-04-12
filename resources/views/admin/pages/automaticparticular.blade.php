@extends('admin.layouts.app')

@section('content')

    <!-- START CUSTOM TABS -->
    <h2 class="page-header">Edit {{$particularpage->title}}</h2>
    @include('admin.layouts._partials.messages.info')

    <div class="row">
        <div class="col-md-12">
            @if(count($errors))
                <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
        @endif
        <!-- Custom Tabs -->
            <div class="nav-tabs-custom">

              <form method="post" action="/admin/pages/{{$particularpage->slug}}/{{$particularpage->id}}"  id="slider-form" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="put">
                    {{csrf_field()}}
                    <div class="box-body">

                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <input type="file" id="inputFile" name="image" onchange="loadFile(event)">
                      </div>

                      <img src="/uploads/pages/{{$particularpage->slug}}/{{$particularpage->image}}" height="90px" width="90px" id="output" alt="about us image">
                      <br>
                      <div class="form-group">
                          <br>
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="description" id="ck-vai" value="" placeholder="Enter Description">{{$particularpage->description}}</textarea>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Edit {{$particularpage->title}}</button>
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
   CKEDITOR.replace( 'description' );


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
