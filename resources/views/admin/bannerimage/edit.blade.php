@extends('admin.layouts.app')

@section('content')

<section class="content-header">
  <h1> Add Banner Image </h1>
</section>
<br>
  @include('admin.layouts._partials.messages.info')
  @if(count($errors))
  @foreach($errors as $ero)
      <h4>{{@ero}}</h4> <br>
  @endforeach
      <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
@endif
<div class="row">
  <div class="col-md-12">
<div class="box box-info">
             <div class="box-header with-border">

            <div class="box-body">
              <form method="post" action="{{route('bannerimage.update', $data->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
              
                <div class="row equal_height">
                    <div class="form-group col-md-4">
                        <label for="exampleInputFile">About Us Page Banner Image</label>
                        <input type="file" id="inputFile3" value="{{$data->about_us_banner}}" name="about_us_banner" onchange="loadFile3(event)" data-args="3">
                        <br>
                        <img src="/uploads/setting/{{$data->about_us_banner}}" id="output3" alt="banner Image" height="100px" width="100px">
                        {!!$errors->first('about_us_banner', '<span class="text-danger has-error">:message</span>')!!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputFile">Product Page Banner Image</label>
                        <input type="file" id="inputFile3" value="{{$data->product_banner}}" name="product_banner" onchange="loadFile4(event)" data-args="3">
                        <br>
                        <img src="/uploads/setting/{{$data->product_banner}}" id="output4" alt="banner Image" height="100px" width="100px">
                        {!!$errors->first('product_banner', '<span class="text-danger has-error">:message</span>')!!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputFile">Services Page Banner Image</label>
                        <input type="file" id="inputFile3" value="{{$data->service_banner}}" name="service_banner" onchange="loadFile5(event)" data-args="3">
                        <br>
                        <img src="/uploads/setting/{{$data->service_banner}}" id="output5" alt="banner Image" height="100px" width="100px">
                        {!!$errors->first('service_banner', '<span class="text-danger has-error">:message</span>')!!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputFile">Client Page Banner Image</label>
                        <input type="file" id="inputFile3" value="{{$data->client_banner}}" name="client_banner" onchange="loadFile6(event)" data-args="3">
                        <br>
                        <img src="/uploads/setting/{{$data->client_banner}}" id="output6" alt="banner Image" height="100px" width="100px">
                        {!!$errors->first('client_banner', '<span class="text-danger has-error">:message</span>')!!}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputFile">Contact Us Page Banner Image</label>
                        <input type="file" id="inputFile3" value="{{$data->contact_us_banner}}" name="contact_us_banner" onchange="loadFile7(event)" data-args="3">
                        <br>
                        <img src="/uploads/setting/{{$data->contact_us_banner}}" id="output7" alt="banner Image" height="100px" width="100px">
                        {!!$errors->first('contact_us_banner', '<span class="text-danger has-error">:message</span>')!!}
                    </div>

                    <div class="form-group col-md-12">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
                </div>
            </form>
            </div>
          </div>

        </div>

      </div>


@endsection
@push('scripts')
<style type="text/css">
  
  .equal_height {
  display: flex;
 flex-wrap: wrap;
}
.height_manage{
   height: 100% !important;
}
</style>

<script>

          var loadFile3 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output3');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };

          var loadFile4 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output4');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };

          var loadFile5 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output5');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };

          var loadFile6 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output6');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };

          var loadFile7 = function(event) {
            var reader = new FileReader();
            reader.onload = function(){
              var output = document.getElementById('output7');
              output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
          };




        // // function(i){
        //   var loadFile = function(event, i) {
        //     console.log(i);
        //       var reader = new FileReader();
        //       reader.onload = function(){
        //         var output = document.getElementById('output'+i);
        //         output.src = reader.result;
        //       };
        //       console.log(reader);
        //       reader.readAsDataURL(event.target.files[0]);
        //     };
        // // }

        //   var value1 = $('#inputFile1').data("args");
        //   var value2 = $('#inputFile2').data("args");

     
          
      

      </script>

@endpush
