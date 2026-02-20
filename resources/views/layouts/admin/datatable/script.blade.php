{{ $dataTable->scripts() }}

<script type="text/javascript">
    function filterDataTable(dataTableId) {
        window.LaravelDataTables[dataTableId].draw();
    }

    function resetDataTable(dataTableId,formId) {
        document.getElementById(formId).reset();
        filterDataTable(dataTableId)
    }

    $(document).ready(function() {
        $(document).on('click', '.deleteButton', function() {
            var url = $(this).attr('action-url');
            var dataTableId = $(this).attr('data-table-id');
            if (!confirm('Are you sure you want to delete this item?')) return;
            $.ajax({
                url: url,
                type: 'DELETE',
                data: { _token: $('meta[name="csrf-token"]').attr('content') },
                success: function(response) {
                    if (response.success && dataTableId && typeof window.LaravelDataTables !== 'undefined' && window.LaravelDataTables[dataTableId]) {
                        window.LaravelDataTables[dataTableId].draw();
                    }
                },
                error: function(xhr) {
                    alert(xhr.responseJSON?.message || 'Failed to delete.');
                }
            });
        });
    });
</script>