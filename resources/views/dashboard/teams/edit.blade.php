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

<h3 class="page-title">تعديل فريق </h3>

<form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>العنوان</label>
        <input type="text" name="ar_name" class="form-control" value="{{$team->ar_name}}" required>
    </div>
    <div class="form-group">
        <label>التفاصيل</label>
        <input type="text" name="ar_specialization" class="form-control" value="{{$team->ar_specialization}}" required>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="en_name" class="form-control" value="{{$team->en_name}}" required>
    </div>
    <div class="form-group">
        <label>Description</label>
        <input type="text" name="en_specialization" class="form-control" value="{{$team->en_specialization}}" required>
    </div>
    <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="face" class="form-control" value="{{$team->face}}">
        </div>
        <div class="form-group">
            <label>Instagram</label>
            <input type="text" name="insta" class="form-control" value="{{$team->insta}}">
        </div>
        <div class="form-group">
                <label>Google</label>
                <input type="text" name="google" class="form-control" value="{{$team->google}}">
            </div>
            <div class="form-group">
                <label>Twiter</label>
                <input type="text" name="twit" class="form-control" value="{{$team->twit}}">
            </div>

    <!-- IMAGE -->
    <label>صورة</label>
    <div class="fileinput fileinput-team input-group" data-provides="fileinput">
        <div class="form-control" data-trigger="fileinput">
            <i class="glyphicon glyphicon-file fileinput-exists"></i>
            <span class="fileinput-filename"></span>
        </div>
        <span class="input-group-addon btn btn-default btn-file">
            <span class="fileinput-team">Select file</span>
            <span class="fileinput-exists">Change</span>
            <input type="file" id="photo" name="photo">
        </span>
        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>

    <label>Old Photo</label>
    <div class="form-group">
        <img src="{{asset('images/'.$team->photo)}}" alt="" srcset="">
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
    $('.fileinput').fileinput()
</script>
@endsection
<!-- END SCRIPTS -->