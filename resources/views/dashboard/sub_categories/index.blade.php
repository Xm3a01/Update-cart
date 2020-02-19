@extends('dashboard.metronic')
@section('title', ' جدول التصنيفات الفرعيه')
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
            <a href="{{route('dashboard.index')}}">الصفحة الرئيسية</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{route('subcategories.index')}}">التصنيفات الفرعيه</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> التصنيف الفرعي </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول التصنيفات الفرعيه</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_subcategroy"> أضافة تصنيف فرعي
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="companies-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>الأسم</th>
                        <th>Name</th>
                        <th>التصنيف</th>
                        <th>العمليات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{$subcategory->id}}</td>
                        <td>{{$subcategory->ar_name}}</td>
                        <td>{{$subcategory->name}}</td>
                        <td>{{$subcategory->category->ar_name ?? ''}}</td>
                        <td>
                            <form action="{{route('subcategories.destroy', $subcategory->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('subcategories.edit', $subcategory->id)}}"
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

<!-- BEGIN ADD_company MODEL -->
<div class="modal fade in" id="add_subcategroy">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة مستخدم</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('subcategories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>الأسم</label>
                        <input type="text" name="ar_name" class="form-control" placeholder="الأسم" required>
                        
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>

                        <label for="">اختار التصنيف</label>
                        <select class="form-control" name="category_id" id="category_id">
                            <option value="" hidden selected>التصنيف</option>
                            @foreach ($categories as $category)     
                              <option value="{{$category->id}}">{{$category->ar_name}}</option>
                            @endforeach
                        </select>
                        <label for="">الصوره</label>
                        <input type="file" class="form-control" name="photo">
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
<!-- BEGIN ADD_sub category MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#companies-table').DataTable();
    });

</script>
@endsection
<!-- END SCRIPTS -->
