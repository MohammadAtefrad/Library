@extends('layoutmain')
@section('content')
<div class="row">
    <!-- main content -->
    <div class="col-8 col-md-9 my-3">
        main
    </div>

    <!-- Sidebar -->
    <div class="col-4 col-md-3 border-left border top text-right">
        <div class="d-flex flex-column mr-4">
            <ul class="list-unstyled">
                <h3 class="my-4">:دسترسی  به کتاب ها</h3>
                <li><h4>بر اساس حروف الفبا</h4></li>
                <div class="d-flex flex-wrap flex-row-reverse justify-content-between my-2">
                    <a href="#" class="btn m-1" style="background: #50c058">آ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ب</a>
                    <a href="#" class="btn m-1" style="background: #50c058">پ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ت</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ث</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ج</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ح</a>
                    <a href="#" class="btn m-1" style="background: #50c058">خ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">د</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ذ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ر</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ز</a>
                    <a href="#" class="btn m-1" style="background: #50c058">س</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ش</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ص</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ض</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ط</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ظ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ع</a>
                    <a href="#" class="btn m-1" style="background: #50c058">غ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ف</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ق</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ک</a>
                    <a href="#" class="btn m-1" style="background: #50c058">گ</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ل</a>
                    <a href="#" class="btn m-1" style="background: #50c058">م</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ن</a>
                    <a href="#" class="btn m-1" style="background: #50c058">و</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ه</a>
                    <a href="#" class="btn m-1" style="background: #50c058">ی</a>
                </div>
            <li><h4>بر اساس دسته بندی</h4></li>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-between my-2">
                @foreach ($categories=[] as $category)
                    <a href="#" class="btn m-1" style="background: #50c058">ی</a>
                @endforeach
            </div>
        </ul>
    </div>
</div>
@endsection
