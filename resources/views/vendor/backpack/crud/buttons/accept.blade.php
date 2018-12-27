{{-- @if ($crud->hasAccess('update'))
    <a href="{{ Request::url().'/'.$entry->getKey() }}/accept" class="btn btn-xs btn-default"><i class="fa fa-ban"></i> تایید فاکتور</a>
@endif --}}

@if ($crud->hasAccess('update'))
    @if ($entry->factorStatus->factor_status == 'جدید')
        <a href="{{ route('factor.accept' , ['id' => $entry->getKey()]) }}" class="btn btn-xs btn-default"><i class="fa fa-check"></i> تایید فاکتور</a>
    @endif
@endif

