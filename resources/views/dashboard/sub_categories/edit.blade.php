@extends('dashboard.metronic')
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

<h3 class="page-title">تعديل المنطقه </h3>

<form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST" enctype ="multipart/form-data">
    @csrf {{ method_field('PUT') }}
    <div class="form-group">
        <label>الأسم</label>
        <input type="text" name="ar_name" class="form-control" value="{{$subcategory->ar_name}}" required>
    </div>

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{$subcategory->name}}" required>
    </div>



 <div class="form-group">
    <label for="">اختار التصنيف</label>
    <select class="form-control" name="category_id" id="category_id">
        <option selected hidden  value="" selected>التصنيف</option>
        @foreach ($categories as $category)     
          <option  {{$category->id == $subcategory->category_id ? 'selected' : '' }} value="{{$category->id}}">{{$category->ar_name}}</option>
        @endforeach
    </select>
    </div>
    <label for="">الصوره</label>
    <input type="file" class="form-control" name="photo">
    
    <div class="margin-top-10">
        <button type="submit" class="btn green"> حفظ التعديل </button>
    </div>
</form>

@endsection