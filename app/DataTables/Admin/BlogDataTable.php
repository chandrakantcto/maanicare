<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BlogDataTable extends DataTable
{
    protected $dataTableId = 'BlogDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('category', function ($row) {
                return $row->category_id
                    ? ($row->category?->name ?? '—')
                    : '—';
            })
            ->addColumn('author', function ($row) {
                return $row->author_id
                    ? ($row->author?->name ?? '—')
                    : '—';
            })
            ->addColumn('featured_badge', function ($row) {
                return $row->featured
                    ? '<span class="badge bg-success-subtle text-success">Yes</span>'
                    : '<span class="badge bg-secondary-subtle text-secondary">No</span>';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.blogs.show', $row->id),
                    'edit_url'   => route('admin.blogs.edit', $row->id),
                    'delete_url' => route('admin.blogs.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('title', fn ($row) => \Str::limit($row->title, 40))
            ->editColumn('published_at', fn ($row) => $row->published_at?->format('M d, Y') ?? '—')
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->rawColumns(['featured_badge', 'action'])
            ->setRowId('id');
    }

    public function query(Blog $model): QueryBuilder
    {
        return $model->newQuery()->with(['category', 'author']);
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.blogs.index'), 'method' => 'GET']))
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
            Column::computed('author')->title('Author'),
            Column::make('status'),
            Column::computed('featured_badge')->title('Featured'),
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
        return 'Blog_' . date('YmdHis');
    }
}
