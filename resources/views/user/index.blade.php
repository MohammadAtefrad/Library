@extends('layoutuser')
@section('content')

<div class="col-8 col-md-9 text-right bg-warning shadow rounded">
    {{-- flash welcoming message --}}
    @if ($message=session('message'))
    <div class="col-12 my-0 alert alert-success text-center" style="position-top=48px">
    {{$message}}
    </div>
    @endif
    {{-- end message --}}
    
    <div id=content>
        <h3 class="my-4">مشخصات</h3>
        @include('layouts.errors')
        <div class="d-flex flex-column bg-dark mb-3 text-white rounded">
            <form class="col-11 col-md-9 mx-auto" role="form" method="post" action="{{ route('user.updateprofile', ['user'=>$user->id]) }}">
                {{ csrf_field() }}
                <div class="form-group mt-2">
                    <label for="firstname" class="">نام</label>
                    <input id="firstname" class="form-control" name="firstname" placeholder="{{ $user->firstname }}" value="{{old('firstname')}}">
                </div>
                <div class="form-group">
                    <label for="lastname" class="">نام خانوادگی</label>
                    <input id="lastname" class="form-control" name="lastname" placeholder="{{ $user->lastname }}" value="{{old('lastname')}}">
                </div>
                <div class="form-group">
                    <label for="name" class="">نام کامل</label>
                    <input id="name" class="form-control" name="name" placeholder="{{ $user->name }}" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="phone" class="">شماره تلفن</label>
                    <input id="phone" class="form-control" name="phone" placeholder="{{ $user->phone }}" value="{{old('phone')}}">
                </div>
                <div class="form-group">
                    <label for="personal_code" class="">کد ملی</label>
                    <input id="personal_code" class="form-control" name="personal_code" placeholder="{{ $user->personal_code }}" value="{{old('personal_code')}}">
                </div>
                <div class="form-group">
                        <label for="email" class="">!!!کد ملی : غیرقابل ویرایش</label>
                        <input id="email" class="form-control disabled" name="email" placeholder="{{ $user->email }}" value="{{old('email')}}">
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-success shadow">تایید</button>
                </div>
            </form>
        </div>
    </div>        
</div>
@endsection
