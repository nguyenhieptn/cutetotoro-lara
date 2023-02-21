<!-- Site wrapper -->
<!-- Main Sidebar Container -->
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
    @foreach (getCategoriesMenu() as $key => $data)
    <li class="nav-item">
        <style>
        .nav-item p {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 600;
            font-size: 16px;
            color: #000000;
        }
        .Item_menu{
            text-align: center;
        }
        </style>
        <a href="#" class="nav-link">
            <p>
                {{$data->label}}
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item Item_menu">
                <a href="/all-product" class="nav-link">
                    <p>{{$data->label}} item</p>
                </a>
            </li>
            <li class="nav-item Item_menu">
                <a href="/all-product" class="nav-link">
                    <p>{{$data->label}} item</p>
                </a>
            </li>
            <li class="nav-item Item_menu">
                <a href="/all-product" class="nav-link">
                    <p>{{$data->label}} item</p>
                </a>
            </li>
        </ul>
    </li>
    @endforeach
</ul>
<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
