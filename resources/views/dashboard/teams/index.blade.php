@extends('dashboard.metronic')
@section('title', ' جدول الفريق')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{ asset('vendor/plugins/datatables/datatables.min.css') }}">
<link rel="stylesheet" href="{{asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}">
@endsection
<!-- END CSS -->
@section('content')
<!-- BEGIN PAGE-BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="{{route('admin')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('teams.index')}}">الفريق</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الفريق </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الفريق</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_team"> أضافة فؤيق
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="teams-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>التخصص</th>
                        <th>Name</th>
                        <th>Devision</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{$team->id}}</td>
                        <td>{{$team->ar_name}}</td>
                        <td>{{$team->ar_specialization}}</td>
                        <td>{{$team->en_name}}</td>
                        <td>{{$team->en_specialization}}</td>
                        <td>
                            <form action="{{route('teams.destroy', $team->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('teams.edit', $team->id)}}"
                                    class="btn dark btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit"> تعديل </i>
                                </a>
                                <button type="submit" class="btn red btn-sm btn-outline sbold uppercase">
                                    <i class="fa fa-edit">حذف</i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END TABLE -->
    </div>
</div>
<!-- END DATATABLE -->

<!-- BEGIN ADD_team MODEL -->
<div class="modal fade in" id="add_team">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة مشروع</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="text" name="ar_name" class="form-control" placeholder="الأسم" required>

                        <label>التخصص</label>
                        <input type="text" name="ar_specialization" class="form-control" placeholder="التخصص" required>

                        <label>Name</label>
                        <input type="text" name="en_name" class="form-control" placeholder="Name" required>

                        <label>Division</label>
                        <input type="text" name="en_specialization" class="form-control" placeholder="Division"
                            required>

                        <label>Facebook</label>
                        <input type="text" name="face" class="form-control" placeholder="URL">

                        <label>Insta</label>
                        <input type="text" name="insta" class="form-control" placeholder="URL">
                        <label>Google</label>
                        <input type="text" name="google" class="form-control" placeholder="URL">

                        <label>Twiter</label>
                        <input type="text" name="twit" class="form-control" placeholder="URL">


                        <label>صورة</label>
                        <input id="photo" type="file" name="photo" multiple>

                    </div>
                    <div class="margin-top-10">
                        <button type="submit" class="btn btn-outline sbold green">أضافة</button>
                        <button type="button" class="btn btn-outline sbold red" data-dismiss="modal">أغلاق</button>
                    </div>
                </form>
            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- BEGIN ADD_team MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#teams-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
