@extends('admin.layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
            <!-- Custom Tabs -->
       <div class="nav-tabs-custom">

      <div class="table-content">
         <h2>Service List</h2>

                 @include('admin.layouts._partials.messages.info')

                 @if(count($data) < 1)
                        <p>No data.</p>
                   @else
          <table id="services-table" class="table table-bordered table-striped">
             <thead>
                  <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Options </th>
                      </tr>
                 </thead>

         <tbody>

          @foreach($data as $index => $details)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$details->title}}</td>
                  <td>{{$details->slug}}</td>
                <td>{!! str_limit($details->description,50) !!}</td>
                <td>
                  <a class="btn btn-info edit" href="{{route('service.edit',$details->id)}}" title="Edit">Edit</a>
                   <br> <br>
                  <!-- <form method= "post" action="{{route('service.destroy',$details->id)}}">
                  {{csrf_field()}}
                  <input type="hidden" name="_method" value="DELETE">
                  <button onclick="return confirm('Are you sure you want to delete?')" type="submit" class="btn btn-danger">Delete</button>
                  </form> -->
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
