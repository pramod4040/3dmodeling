@extends('admin.layouts.app')

@section('content')


<h2 class="page-header">Edit Category </h2>
  @include('admin.layouts._partials.messages.info')

  <div class="row">
      <div class="col-md-12">
          @if(count($errors))
              <div class="alert alert-danger"><strong>Whoops!</strong> Please review the errors and try again.</div>
          @endif
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">

            <form method="post" action="{{route('category.update', $data->id)}}"  id="slider-form" enctype="multipart/form-data">

              {{csrf_field()}}
              <input type="hidden" name="_method" value="put">
              <div class="box-body">
            <div class="row">
              <div class="form-group col-md-12">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" value="{{$data->title}}" name="title" id="category-title" placeholder="Enter Category Name">
                  {!!$errors->first('title', '<span class="text-danger has-error">:message</span>')!!}
              </div>
              <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Slug</label> (It will generated automatically.)
                  <input type="text" class="form-control" value="{{$data->slug}}" name="slug"  id="category-slug" placeholder="Slug">
                  {!!$errors->first('slug', '<span class="text-danger has-error">:message</span>')!!}
              </div>

            </div>

            <br>
              <button type="submit" class="btn btn-primary">Edit Category</button>
          </div>
          </form>


          </div>
          <!-- nav-tabs-custom -->
      </div>
      <!-- /.col -->
  </div>

  @push('scripts')

     <script>

     $(document).ready(function () {
         $("#category-title").change(function () {
             var title = $(this).val();
             $.ajax({
                 type: "get",
                 url: '/admin/category/slug/' + title,
                 cache: false,
                 success: function (result) {
                     $('#category-slug').val(result);
                 }
             });
         });
     });

     </script>



  @endpush





@endsection
