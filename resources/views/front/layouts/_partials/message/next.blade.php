@if(session('productMessage'))
    <div class="alert alert-info alert-dismissible fade in" id="successMessage">
      {{session('productMessage')}}
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
@endif
