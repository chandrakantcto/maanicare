@if (!empty($actions['edit_url']))
    <a href="{{ $actions['edit_url'] }}" class="btn btn-outline-primary">
        <i class="ri-edit-box-line"></i>
    </a>
@endif

@if (!empty($actions['view_url']))
    <a href="{{ $actions['view_url'] }}" class="btn btn-outline-info">
        <i class="ri-eye-line"></i>
    </a>
@endif
@if (!empty($actions['delete_url']))
    <a href="javascript:void(0);" class="btn btn-outline-danger row-delete-button" action-url="{{ $actions['delete_url'] }}" data-table-id="{{ $actions['dataTableId'] ?? '' }}">
        <i class="ri-delete-bin-6-line"></i>
    </a>
@endif
