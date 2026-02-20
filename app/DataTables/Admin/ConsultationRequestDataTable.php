<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\ConsultationRequest;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ConsultationRequestDataTable extends DataTable
{
    protected $dataTableId = 'ConsultationRequestDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.consultation-requests.show', $row->id),
                    'edit_url'   => null,
                    'delete_url' => route('admin.consultation-requests.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y H:i'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->setRowId('id');
    }

    public function query(ConsultationRequest $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.consultation-requests.index'), 'method' => 'GET']))
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
            Column::make('preferred_reach_time')->title('Preferred Time'),
            Column::make('good_reach_time')->title('Good Time'),
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
        return 'ConsultationRequest_' . date('YmdHis');
    }
}
