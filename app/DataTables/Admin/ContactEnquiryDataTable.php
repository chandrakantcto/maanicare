<?php

namespace App\DataTables\Admin;

use App\Libraries\DataTableHelper;
use App\Models\ContactEnquiry;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ContactEnquiryDataTable extends DataTable
{
    protected $dataTableId = 'ContactEnquiryDataTable';

    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                $actions = [
                    'dataTableId' => $this->dataTableId,
                    'view_url'   => route('admin.contact-enquiries.show', $row->id),
                    'edit_url'   => null,
                    'delete_url' => route('admin.contact-enquiries.destroy', $row->id),
                ];
                return view('layouts.admin.datatable.actions', compact('actions'));
            })
            ->editColumn('message', fn ($row) => $row->message ? \Str::limit($row->message, 40) : '—')
            ->editColumn('created_at', fn ($row) => $row->created_at?->format('M d, Y H:i'))
            ->setRowId('id');
    }

    public function query(ContactEnquiry $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId($this->dataTableId)
            ->parameters(DataTableHelper::getDataTableParameters())
            ->ajax(DataTableHelper::getDataTableAjax(['url' => route('admin.contact-enquiries.index'), 'method' => 'GET']))
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
            Column::make('industry'),
            Column::make('service_of_interest')->title('Service'),
            Column::make('message')->title('Message'),
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
        return 'ContactEnquiry_' . date('YmdHis');
    }
}
