@extends('layoutuser')
@section('content')

<div class="col-8 col-md-9 text-right">
    <div id=content>
        <h3>سلام {{($user->name)}}</h3>
        <h4>به پروفایل کاربری خود خوش آمدید</h4>
    </div>        
</div>
@endsection
