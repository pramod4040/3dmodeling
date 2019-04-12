@extends('admin.layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
            <!-- Custom Tabs -->
       <div class="nav-tabs-custom">

      <div class="table-content">
         <h2>Category List &nbsp; &nbsp; <a href="/admin/category/create" class="btn btn-primary">Add Category</a> </h2>

                 @include('admin.layouts._partials.messages.info')

                 @if(count($data) < 1)
                        <p>No data.</p>
                   @else
          <table id="services-table" class="table table-bordered table-striped">
             <thead>
                  <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Options </th>
                      </tr>
                 </thead>

         <tbody>

          @foreach($data as $index => $details)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$details->title}}</td>
                <td>{{$details->slug}}</td>
              <td>
                  <a class="btn btn-info edit" href="{{route('category.edit',$details->id)}}" title="Edit">Edit</a>
                   <br> <br>
                  <form method= "post" action="{{route('category.destroy',$details->id)}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <button onclick="return confirm('Are you sure you want to delete?')" type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </td>
              </tr>

            @endforeach

         </tbody>
    </table>
  @endif

    </div>
  </div>
</div>
</div>


@endsection
