@if ($crud->hasAccess('update'))
<a href="{{ Request::url().'/'.$entry->getKey() }}/accept" class="btn btn-xs btn-default"><i class="fa fa-ban"></i> تایید فاکتور</a>
@endif
