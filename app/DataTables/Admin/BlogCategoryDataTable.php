<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BlogCategoryDataTable extends DataTable
{
    protected $dataTableId = 'BlogCategoryDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('parent', function ($row) {
                return $row->parent_id
                    ? ($row->parent?->name ?? '-')
                    : '—';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.blog-categories.show', $row->id),
                    'edit_url'   => route('admin.blog-categories.edit', $row->id),
                    'delete_url' => route('admin.blog-categories.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->setRowId('id');
    }

    public function query(BlogCategory $model): QueryBuilder
    {
        return $model->newQuery()->with('parent');
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.blog-categories.index'), 'method' => 'GET']))
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle();
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('slug'),
            Column::computed('parent')->title('Parent'),
            Column::make('status'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'BlogCategory_' . date('YmdHis');
    }
}
