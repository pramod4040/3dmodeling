@extends('admin.layouts.app')

@push('styles')
<style href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> </style>
@endpush

@section('content')

<div class="row">
   <div class="col-md-12">
            <!-- Custom Tabs -->
       <div class="nav-tabs-custom">

      <div class="table-content">
         <h2>News List &nbsp; &nbsp; <a href="/admin/news/create" class="btn btn-primary">Add News</a> </h2>

                 @include('admin.layouts._partials.messages.info')

                 @if(count($data) < 1)
                        <p>No data.</p>
                   @else
          <table id="myTable" class="table table-bordered table-striped">
             <thead>
                  <tr>
                        <th>S.N.</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Published</th>
                        <th>Image</th>
                        <th>Options </th>
                      </tr>
                 </thead>

         <tbody>

          @foreach($data as $index => $details)
              <tr>
                <td>{{++$index}}</td>
                <td>{{$details->title}}</td>
                <td>{{$details->slug}}</td>
                <td>{{$details->description}}</td>
                <td class="project-status" id="change-status">
                  <a data-toggle="tooltip" data-placement="top"
                  title="{{$details->published ? 'Unpublish Item' : 'Publish Item'}}"
                  href="/admin/news/toggle-status/{{$details->id}}"
                  class="label label-{!! $details->published ? 'primary' : 'danger' !!}" data-id="{{$details->id}}">
                  {!! $details->published ? 'Publish' : 'Unpublish' !!}
                  </a>
                </td>
                <td><a href="/uploads/news/{{$details->image}}" target="_blank"><img style="height:90px; width: 90px;" src="{{$details->image ? asset('uploads/news/' . $details->image) : '/assets/admin/dist/img/no-photo.png' }}"></a></td>
                <td>
                  <a class="btn btn-info edit" href="{{route('news.edit',$details->id)}}" title="Edit">Edit</a>
                    <br> <br>
                  <form method= "post" action="{{route('news.destroy',$details->id)}}">
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
 <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

@endpush
