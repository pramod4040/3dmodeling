
@extends('admin.layouts.app')

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
@endpush

@section('content')

<div class="row">
   <div class="col-md-12">
            <!-- Custom Tabs -->
       <div class="nav-tabs-custom">

      <div class="table-content">
         <h2>Contacts List</h2>

                 @include('admin.layouts._partials.messages.info')

                 @if(count($data) < 1)
                            <p>No data.</p>
                   @else
          <table id="contactus-table" class="table table-bordered table-striped">
             <thead>
                  <tr>
                        <th>S.N.</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Message</th>
                        <th>Options</th>
                      </tr>
                 </thead>

         <tbody>

          @foreach($data as $index => $details)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$details->name}}</td>
                <td>{{$details->email}}</td>
                <td>{{$details->message}} </td>
               <td>
                 <form method= "post" action="{{route('deleteContactus',$details->id)}}">
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

@push('scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>

$(document).ready( function () {
  $('#contactus-table').DataTable();
} );

</script>
@endpush
