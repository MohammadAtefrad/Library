@extends('layoutuser')
@section('content')

<div class="col-8 col-md-9 text-right bg-warning shadow rounded">
    <div id=content>
        <h3 class="my-4">کتاب های امانت گرفته شده</h3>
        <table class="table table-striped text-center table-hover" style="direction:rtl;font-size:0.8rem">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th style="min-width:9vw">شماره فاکتور</th>
                    <th>تعداد</th>
                    <th>شماره</th>
                    <th>نام کتاب</th>
                </tr>
            </thead>
            @foreach ($bookfactor as $factor)
            <tr>
                <td class="px-0">{{$loop->iteration}}</td>
                <td class="px-0">{{$factor->id}}</td>
                <td class="px-0">{{$factor->books_number}}</td>
                <td class="p-0">
                    <table class="table bg-warning my-1">
                        @foreach ($factor['books'] as $book)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
                <td class="p-0 col">
                    <table class="table bg-warning my-1">
                        @foreach ($factor['books'] as $book)
                            <tr>
                                <td>{{$book->name}}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>                            
            </tr>
            @endforeach
        </table>
        {{-- {{$bookfactor}} --}}
    </div>        
</div>
@endsection