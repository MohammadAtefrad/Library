<div class="col-4 col-md-3 border-left border top text-right bg-warning shadow rounded">
    <h3 class="my-4">پروفایل کاربری</h3>
    <div class="d-flex flex-column bg-dark mb-3 rounded" style="background: #;">
        <div class="p-3 "><span class="badge badge-pill badge-warning float-left mt-2">0</span><a href="{{ route('user.books') }}" class="btn border-0"><h6>کتاب ها</h6></a></div>
        <div class="p-3 "><span class="badge badge-pill badge-warning float-left mt-2">0</span><a href="{{ route('user.articles', ['user'=>$user->id]) }}" class="btn border-0"><h6>مقالات</h6></a></div>
        <div class="p-3 "><span class="badge badge-pill badge-warning float-left mt-2">0</span><a href="{{ route('user.books', ['user'=>$user->id]) }}" class="btn border-0"><h6>فاکتورها</h6></a></div>
        <div class="p-3 "><span class="badge badge-pill badge-warning float-left mt-2">0</span><a href="{{ route('user.books', ['user'=>$user->id]) }}" class="btn border-0"><h6>کامنت های من</h6></a></div>
        <div class="p-3 "><span class="badge badge-pill badge-warning float-left mt-2">0</span><a href="{{ route('user.books', ['user'=>$user->id]) }}" class="btn border-0"><h6>پیام ها</h6></a></div>
    </div>
</div>