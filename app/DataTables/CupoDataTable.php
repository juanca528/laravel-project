<?php

namespace App\DataTables;

use App\Models\Cupo;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class CupoDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'cupos.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Cupo $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Cupo $model)
    {
        return $model->newQuery()->with(['cliente','producto']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'language' => [
                    'url' => url('http://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'),//<--here
                ],
                'buttons' => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'serial',
            'fecha_inicio',
            'fecha_fin',
            'estado',
            //'cod_cliente',
            ['title' => 'Cliente',
            'data' => 'cliente.nombre',
            'name' => 'cliente.nombre'],
            //'cod_producto'
            ['title' => 'Producto',
            'data' => 'producto.nombre',
            'name' => 'producto.nombre']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'cuposdatatable_' . time();
    }
}
