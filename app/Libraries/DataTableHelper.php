<?php
namespace App\Libraries;

class DataTableHelper
{
    public static function getDataTableParameters()
    {
        return [
            'searching' => true,
            'lengthMenu' => [25, 50, 75, 100],
            'language' => ['emptyTable' => '']
        ];
    }

    /**
     * DataTables AJAX config. Must send Accept: application/json so Laravel
     * returns JSON (wantsJson()) instead of HTML, avoiding "Ajax error" on first load.
     * Headers use raw JS (starts with $) so they output as an object, not a string.
     */
    public static function getDataTableAjax($attributes)
    {
        return [
            'url' => $attributes['url'],
            'type' => $attributes['method'],
            'headers' => '$.extend({},{"Accept":"application/json","X-CSRF-TOKEN":$("meta[name=\"csrf-token\"]").attr("content")})',
            'data' => 'function(d) {if($("#dataTableSearchForm").length)$("#dataTableSearchForm").find(".form-control").each(function(){d[$(this).attr("name")]=$(this).val();})}',
            'beforeSend' => 'function() {if($("#preloader").length)$("#preloader").show();}',
            'complete' => 'function() {if($("#preloader").length)$("#preloader").hide();}'
        ];
    }
}