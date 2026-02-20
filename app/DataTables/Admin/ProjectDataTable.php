<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\Project;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ProjectDataTable extends DataTable
{
    protected $dataTableId = 'ProjectDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('category', function ($row) {
                return $row->category_id
                    ? ($row->category?->name ?? '—')
                    : '—';
            })
            ->addColumn('hero_thumb', function ($row) {
                if ($row->hero_image) {
                    $url = asset('storage/' . $row->hero_image);
                    return '<img src="' . e($url) . '" alt="" class="rounded" style="max-height: 40px; width: auto;">';
                }
                return '—';
            })
            ->addColumn('featured_badge', function ($row) {
                return $row->is_featured
                    ? '<span class="badge bg-success-subtle text-success">Yes</span>'
                    : '<span class="badge bg-secondary-subtle text-secondary">No</span>';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.projects.show', $row->id),
                    'edit_url'   => route('admin.projects.edit', $row->id),
                    'delete_url' => route('admin.projects.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('title', fn ($row) => \Str::limit($row->title, 40))
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->rawColumns(['hero_thumb', 'featured_badge', 'action'])
            ->setRowId('id');
    }

    public function query(Project $model): QueryBuilder
    {
        return $model->newQuery()->with('category');
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.projects.index'), 'method' => 'GET']))
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
            Column::make('slug')->visible(false),
            Column::computed('category')->title('Category'),
            Column::computed('hero_thumb')->title('Hero'),
            Column::computed('featured_badge')->title('Featured'),
            Column::make('sort_order')->title('Order'),
            Column::make('status'),
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
        return 'Project_' . date('YmdHis');
    }
}
