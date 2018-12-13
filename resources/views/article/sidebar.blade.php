<div class="col-4 col-md-3 border-left border top text-right">
    <div class="d-flex flex-column mr-4">
        <ul class="list-unstyled">
            <h3 class="my-4">:دسترسی به مقالات</h3>
            <li>
                <h4>بر اساس حروف الفبا</h4>
            </li>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-start my-2" style="font-size:0.8rem !important">
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ا']) }}" class="btn m-1" style="background: #50c058">آ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ب']) }}" class="btn m-1" style="background: #50c058">ب</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'پ']) }}" class="btn m-1" style="background: #50c058">پ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ت']) }}" class="btn m-1" style="background: #50c058">ت</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ث']) }}" class="btn m-1" style="background: #50c058">ث</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ج']) }}" class="btn m-1" style="background: #50c058">ج</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'چ']) }}" class="btn m-1" style="background: #50c058">چ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ح']) }}" class="btn m-1" style="background: #50c058">ح</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'خ']) }}" class="btn m-1" style="background: #50c058">خ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'د']) }}" class="btn m-1" style="background: #50c058">د</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ذ']) }}" class="btn m-1" style="background: #50c058">ذ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ر']) }}" class="btn m-1" style="background: #50c058">ر</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ز']) }}" class="btn m-1" style="background: #50c058">ز</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'س']) }}" class="btn m-1" style="background: #50c058">س</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ش']) }}" class="btn m-1" style="background: #50c058">ش</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ص']) }}" class="btn m-1" style="background: #50c058">ص</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ض']) }}" class="btn m-1" style="background: #50c058">ض</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ط']) }}" class="btn m-1" style="background: #50c058">ط</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ظ']) }}" class="btn m-1" style="background: #50c058">ظ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ع']) }}" class="btn m-1" style="background: #50c058">ع</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'غ']) }}" class="btn m-1" style="background: #50c058">غ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ف']) }}" class="btn m-1" style="background: #50c058">ف</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ق']) }}" class="btn m-1" style="background: #50c058">ق</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ک']) }}" class="btn m-1" style="background: #50c058">ک</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'گ']) }}" class="btn m-1" style="background: #50c058">گ</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ل']) }}" class="btn m-1" style="background: #50c058">ل</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'م']) }}" class="btn m-1" style="background: #50c058">م</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ن']) }}" class="btn m-1" style="background: #50c058">ن</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'و']) }}" class="btn m-1" style="background: #50c058">و</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ه']) }}" class="btn m-1" style="background: #50c058">ه</a>
                <a href="{{ route('category.articles_by_alfabet' , ['letter' => 'ی']) }}" class="btn m-1" style="background: #50c058">ی</a>
            </div>
            <li>
                <h4>بر اساس دسته بندی</h4>
            </li>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-start my-2">
                @foreach ($categories as $category)
                <a href="{{ route('category.articles_by_category' , ['category' => $category->id]) }}" class="btn m-1" style="background: #50c058">{{$category->article_category}}</a>
                @endforeach
            </div>
            <li>
                <h4>بیشترین جستجوها</h4>
            </li>
            <div class="d-flex flex-wrap flex-row-reverse justify-content-bstart my-2">
                @foreach ($categories=[] as $category)
                <a href="#" class="btn m-1" style="background: #50c058"></a>
                @endforeach
            </div>
        </ul>
    </div>
</div>