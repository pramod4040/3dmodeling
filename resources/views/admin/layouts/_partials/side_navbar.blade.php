<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar users panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://proseawards.com/wp-content/uploads/2015/08/no-profile-pic.png" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

             <li class="header">MAIN NAVIGATION</li>

            <li>
                <a href="/admin/dashboard">
                    <i class="fa fa-users"></i> <span>Site Setting</span>
                </a>
            </li>
            <li>
                <a href="{{route('bannerimage.index')}}">
                    <i class="fa fa-users"></i> <span>Banner Image</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>Add Category</a></li>
                    <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Product</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>Add Product</a></li>
                    <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>List</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('service.index')}}">
                    <i class="fa fa-book"></i> <span>Services</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Client</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('client.create')}}"><i class="fa fa-circle-o"></i>Add Client</a></li>
                    <li><a href="{{route('client.index')}}"><i class="fa fa-circle-o"></i>List</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>News</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('news.create')}}"><i class="fa fa-circle-o"></i>Add News</a></li>
                    <li><a href="{{route('news.index')}}"><i class="fa fa-circle-o"></i>List</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>User Enquiry</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('enquiryList')}}"><i class="fa fa-circle-o"></i>Online Enquiry</a></li>
                    <li><a href="{{route('contactusList')}}"><i class="fa fa-circle-o"></i>Contact Us</a></li>
                </ul>
            </li>

            <li class="treeview">
    <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Pages</span>
        <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
    </a>
    <ul class="treeview-menu">
      @foreach($pages as $pg)
        @if($pg->slug != 'contact-us')
        <li><a href="/admin/pages/{{$pg->slug}}"><i class="fa fa-circle-o"></i>{{$pg->title}}</a></li>
        @endif
      @endforeach
    </ul>
</li>

<li class="treeview">
    <a href="#">
        <i class="fa fa-laptop"></i>
        <span>Awards</span>
        <span class="pull-right-container">
  <i class="fa fa-angle-left pull-right"></i>
</span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{route('award.create')}}"><i class="fa fa-circle-o"></i>Add Award</a></li>
        <li><a href="{{route('award.index')}}"><i class="fa fa-circle-o"></i>List</a></li>
    </ul>
</li>



            {{--<li class="treeview">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-users"></i> <span>Follow Up</span>--}}
                    {{--<span class="pull-right-container">--}}
              {{--<i class="fa fa-angle-left pull-right"></i>--}}
            {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="/admin/patient/followup/create"><i class="fa fa-circle-o"></i>Add Follow Up</a></li>--}}
                    {{--<li><a href="/admin/patient/followup/archive"><i class="fa fa-circle-o"></i>Follow Up Archive</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

        </ul>


    </section>

</aside>
