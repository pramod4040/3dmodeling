@extends('admin.layouts.app')

@section('content')

<div class="row">
   <div class="col-md-12">
            <!-- Custom Tabs -->
       <div class="nav-tabs-custom">

      <div class="table-content">
         <h2>Client List &nbsp; &nbsp; <a href="/admin/client/create" class="btn btn-primary">Add Client</a> </h2>

                 @include('admin.layouts._partials.messages.info')

                 @if(count($data) < 1)
                        <p>No data.</p>
                   @else
          <table id="services-table" class="table table-bordered table-striped">
             <thead>
                  <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Logo</th>
                        <th>Options</th>
                      </tr>
                 </thead>

         <tbody>

          @foreach($data as $index => $details)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$details->name}}</td>
                <td>{{$details->link}}</td>
                <td><a href="/uploads/client/{{$details->logo}}" target="_blank"><img style="height:90px; width: 90px;" src="{{$details->logo ? asset('uploads/client/' . $details->logo) : '/assets/admin/dist/img/no-photo.png' }}"></a></td>
                <td>
                  <a class="btn btn-info edit" href="{{route('client.edit',$details->id)}}" title="Edit">Edit</a>
                   <br> <br>
                  <form method= "post" action="{{route('client.destroy',$details->id)}}">
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
