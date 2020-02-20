@extends('dashboard.metronic')
@section('title', ' جدول الأخبار')
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
            <a href="{{route('ads.index')}}">الوصف</a>
            <i class="fa fa-circle"></i>
        </li>
    </ul>
</div>
<!-- END PAGE-BAR -->

<h3 class="page-title"> الوصف </h3>

<!-- BEGIN DATATABLE -->
<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-social-dribbble font-green"></i>
            <span class="caption-subject font-green bold uppercase">جدول الوصف</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <button data-toggle="modal" class="btn sbold green" href="#add_new"> أضافة وصف
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN TABLE -->
        <div class="">
            <table id="ads-table" class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>المنتج</th>
                        <th>العنوان</th>
                        <th>التفاصيل</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                              
                <tbody>
                    @foreach($descriptions as $description)
                    <tr>
                        <td>{{$description->id}}</td>
                        <td>{{$description->item->ar_item_name}}</td>
                        <td>{{$description->ar_title}}</td>
                        <td>{{Str::limit(strip_tags($description->ar_details) , $limit = 30 , $end = '...')}}</td>
                        <td>{{$description->title}}</td>
                        <td>{{Str::limit(strip_tags($description->details) , $limit = 30 , $end = '...')}}</td>
                        <td>
                            <form action="{{route('descriptions.destroy', $description->id)}}" method="POST">
                                @csrf {{ method_field('DELETE') }}
                                <a href="{{route('descriptions.edit', $description->id)}}"
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

<!-- BEGIN ADD_new MODEL -->
<div class="modal fade in" id="add_new">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">أضافة وصف</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('descriptions.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">

                        <label>اختار المنتج</label><br>
                        <select name="item_id" id="item_id" class="custom-select form-control" style=" width:100%;">
                            <option selected disabled >اختار المنتج</option>
                            @foreach ($items as $item)
                            <option  value="{{$item->id}}">{{$item->ar_item_name}}</option>
                            @endforeach
                        </select>

                        <label>العنوان</label>
                        <input type="text" name="ar_title" class="form-control" placeholder="العنوان" required value="{{old('ar_title')}}">


                        <label>التفاصيل</label>
                        <textarea name="ar_details" class="form-control " >{{old('ar_details')}}</textarea>

                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title" value="{{old('title')}}" required>


                        <label>Details</label>
                        <textarea name="details" class="form-control " >{{old('details')}}</textarea>
                        

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
<!-- BEGIN ADD_new MODEL -->

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{ asset('vendor/js/datatable.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/datatables.min.js') }}"></script>
<script src="{{ asset('vendor/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}"></script>
<script>
    //Datatable
    $(document).ready(function () {
        $('#ads-table').DataTable();
        $('.custom-select').select2();
    });

</script>
@endsection
<!-- END SCRIPTS -->
