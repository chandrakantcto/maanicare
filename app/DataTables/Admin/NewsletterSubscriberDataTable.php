<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\NewsletterSubscriber;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class NewsletterSubscriberDataTable extends DataTable
{
    protected $dataTableId = 'NewsletterSubscriberDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.newsletter-subscribers.show', $row->id),
                    'edit_url'   => null,
                    'delete_url' => route('admin.newsletter-subscribers.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y H:i'))
            ->setRowId('id');
    }

    public function query(NewsletterSubscriber $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.newsletter-subscribers.index'), 'method' => 'GET']))
            ->columns($this->getColumns())
            ->dom('Bfrtip')
            ->orderBy(0, 'desc')
            ->selectStyleSingle();
    }

    public function getColumns(): array
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('created_at')->title('Subscribed At'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'NewsletterSubscriber_' . date('YmdHis');
    }
}
