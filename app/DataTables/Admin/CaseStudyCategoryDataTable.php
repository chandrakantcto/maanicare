<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\CaseStudyCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CaseStudyCategoryDataTable extends DataTable
{
    protected $dataTableId = 'CaseStudyCategoryDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('active_badge', function ($row) {
                return $row->is_active
                    ? '<span class="badge bg-success-subtle text-success">Active</span>'
                    : '<span class="badge bg-secondary-subtle text-secondary">Inactive</span>';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.case-study-categories.show', $row->id),
                    'edit_url'   => route('admin.case-study-categories.edit', $row->id),
                    'delete_url' => route('admin.case-study-categories.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->rawColumns(['active_badge', 'action'])
            ->setRowId('id');
    }

    public function query(CaseStudyCategory $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('order')->orderBy('name');
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.case-study-categories.index'), 'method' => 'GET']))
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle();
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('order')->title('Order'),
            Column::make('name'),
            Column::make('slug'),
            Column::make('icon'),
            Column::computed('active_badge')->title('Status'),
            Column::make('created_at'),
            Column::make('updated_at')->visible(false),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'CaseStudyCategory_' . date('YmdHis');
    }
}
