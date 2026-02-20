<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\Client;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ClientDataTable extends DataTable
{
    protected $dataTableId = 'ClientDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('image_thumb', function ($row) {
                if ($row->image) {
                    $url = asset('storage/' . $row->image);
                    return '<img src="' . e($url) . '" alt="" class="rounded" style="max-height: 40px; width: auto;">';
                }
                return '—';
            })
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.clients.show', $row->id),
                    'edit_url'   => route('admin.clients.edit', $row->id),
                    'delete_url' => route('admin.clients.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y'))
            ->editColumn('updated_at', fn ($row) => $row->updated_at?->format('M d, Y'))
            ->rawColumns(['image_thumb', 'action'])
            ->setRowId('id');
    }

    public function query(Client $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.clients.index'), 'method' => 'GET']))
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
            Column::make('slug')->visible(false),
            Column::computed('image_thumb')->title('Image'),
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
        return 'Client_' . date('YmdHis');
    }
}
