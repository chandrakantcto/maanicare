<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\AccessRequest;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AccessRequestDataTable extends DataTable
{
    protected $dataTableId = 'AccessRequestDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('visit_count', function (AccessRequest $row) {
                $sameEmail = AccessRequest::where('email', $row->email)->count();
                $samePhone = AccessRequest::where('phone', $row->phone)->count();
                $count = max($sameEmail, $samePhone);
                return $count . ' time(s)';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.access-requests.show', $row->id),
                    'edit_url'   => null,
                    'delete_url' => route('admin.access-requests.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('verified_at', fn ($row) => $row->verified_at ? $row->verified_at->format('M d, Y H:i') : '—')
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y H:i'))
            ->setRowId('id');
    }

    public function query(AccessRequest $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.access-requests.index'), 'method' => 'GET']))
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(0, 'desc')
            ->selectStyleSingle();
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('full_name')->title('Name'),
            Column::make('email'),
            Column::make('company_name')->title('Company'),
            Column::make('phone'),
            Column::make('verified_at')->title('Verified At'),
            Column::computed('visit_count')->title('Requests (same email/phone)'),
            Column::make('created_at')->title('Submitted'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'AccessRequest_' . date('YmdHis');
    }
}
