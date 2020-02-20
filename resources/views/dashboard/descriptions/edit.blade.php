@extends('dashboard.metronic')
<!-- BEGIN CSS -->
@section('stylesheets')
<link rel="stylesheet" href="{{asset('vendor/css/bootstrap-fileinput.css')}}" /> 
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

<h3 class="page-title">تعديل الوصف </h3>

<form action="{{ route('descriptions.update', $description->id) }}" method="POST" enctype='multipart/form-data'>
    @csrf {{ method_field('PUT') }}

    <div class="form-group">
        <label>اختار المنتج</label>
        <select name="item_id" id="item_id" class="form-control custom-select">
            @foreach ($items as $item)
              <option {{$item->id == $description->item_id ? 'selected' : ''}} value="{{$item->id}}">{{$item->ar_item_name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="ar_title" class="form-control" value="{{$description->ar_title}}" required>
    </div>
    <div class="form-group">
        <label>التفاصيل</label>
        <textarea name="ar_details" class="form-control" >{{$description->ar_details}}</textarea>
    </div>
    <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="{{$description->title}}" required>
    </div>
    <div class="form-group">
        <label>Details</label>
        <textarea name="details" class="form-control" >{{$description->details}}</textarea>
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection

<!-- BEGIN SCRIPTS -->
@section('scripts')
<script src="{{asset('vendor/js/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
    $('.custom-select').select2();
});
</script>
@endsection
<!-- END SCRIPTS -->