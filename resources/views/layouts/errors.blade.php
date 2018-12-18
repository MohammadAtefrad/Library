@if (count($errors))
<div class="alert alert-danger" style="direction:rtl">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif