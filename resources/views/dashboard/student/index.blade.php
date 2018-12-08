@extends('dashboard.layouts.master')
@section('title','Manage Student')
@section('css')
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- Datatables-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/datatables.net-responsive-bs/css/responsive.bootstrap.css')}}">
@endsection

@section('main')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>Manage Student</div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="container-fluid">
                        <!-- DATATABLE-->
                        <div class="card">
                            <div class="card-header">
                                <a href="{{route('student.create')}}" class="btn btn-labeled btn-success mb-2">
                               <span class="btn-label"><i class="fa fa-plus"></i>
                               </span>Student Registration
                                </a>
                            </div>
                            @include('dashboard.layouts.error')
                            <div class="card-header">
                                <div class="card-title">All Students List</div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped my-4 w-100 text text-center" id="datatable1">
                                    <thead class="text-center">
                                    <tr>
                                        <th data-priority="1">No.</th>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Class</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    {{--@foreach($routes as $r)--}}
                                    <tr>
                                        <td class="text-center">1.</td>
                                        <td>s-0001</td>
                                        <td>image</td>
                                        <td>Myint Myat Kaung</td>
                                        <td>myintmyatkaung.info@gmail.com</td>
                                        <td>WPA30</td>
                                        <td class="text-center">
                                            <a href="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="View Detail">
                                                <em class="fa-2x mr-2 fab fa-elementor text-purple"></em>
                                            </a>
                                            <a href="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                                                <em class="fa-2x mr-2 fas fa-edit text-warning"></em>
                                            </a>
                                            <a href=""
                                               onclick="event.preventDefault();
                                           document.getElementById('del-form').submit();"
                                               data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete">
                                                <em class="fa-2x mr-2 fas fa-trash-alt text-danger"></em>
                                            </a>
                                            <form id="del-form" action="" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    {{--@endforeach--}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- Datatables-->
    <script src="{{asset('dashboard_assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons/js/buttons.flash.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-buttons/js/buttons.print.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-keytable/js/dataTables.keyTable.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/jszip/dist/jszip.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/pdfmake/build/pdfmake.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
@endsection


