<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\CaseStudy;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CaseStudyDataTable extends DataTable
{
    protected $dataTableId = 'CaseStudyDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('category', function ($row) {
                return $row->category_id
                    ? ($row->category?->name ?? '—')
                    : '—';
            })
            ->addColumn('published_badge', function ($row) {
                $badges = $row->is_published
                    ? '<span class="badge bg-success-subtle text-success">Published</span>'
                    : '<span class="badge bg-secondary-subtle text-secondary">Draft</span>';
                if ($row->is_featured) {
                    $badges .= ' <span class="badge bg-warning-subtle text-warning">Featured</span>';
                }
                return $badges;
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.case-studies.show', $row->id),
                    'edit_url'   => route('admin.case-studies.edit', $row->id),
                    'delete_url' => route('admin.case-studies.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('title', fn ($row) => \Str::limit($row->title, 40))
            ->editColumn('published_at', fn ($row) => $row->published_at?->format('M d, Y') ?? '—')
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->rawColumns(['published_badge', 'action'])
            ->setRowId('id');
    }

    public function query(CaseStudy $model): QueryBuilder
    {
        return $model->newQuery()->with('category');
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.case-studies.index'), 'method' => 'GET']))
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(0)
            ->selectStyleSingle();
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('title'),
            Column::computed('category')->title('Service Category'),
            Column::computed('published_badge')->title('Status'),
            Column::make('published_at')->title('Published'),
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
        return 'CaseStudy_' . date('YmdHis');
    }
}
