<?php
/**
 * Created by Claudio Campos.
 * User: callcocam@gmail.com, contato@sigasmart.com.br
 * https://www.sigasmart.com.br
 */
return [

    /*
     * The class to use to handle the export functionality
     */
    'exports' => \SIGA\Table\Exports\Export::class,

    /*
     * Which library you want to use for PDF generation
     * Supports dompdf, mpdf
     * You must install the appropriate third party package for each
     * See: https://docs.laravel-excel.com/3.1/exports/export-formats.html
     * And: https://phpspreadsheet.readthedocs.io/en/latest/topics/reading-and-writing-to-file/#pdf
     */
    'pdf_library' => 'dompdf',
    'pagination'=>'tailwind',

    /*
     * The frontend styling framework to use
     * Options: bootstrap-4
     */
    'theme' => 'tailwind',
    //'theme' => 'bootstrap-4',
    //'theme' => 'core-ui',
     'core-ui'=>[
         'classes'=>[
             'table'=>'table table-responsive-sm table-striped'
         ]
     ],
     'tailwind'=>[
         'classes'=>[
             'container'=>'-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8',
             'sub-container'=>'align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200',
             'table'=>'min-w-full',
             'thead'=>'',
             'th'=>'px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider',
             'tr'=>'',
             'td'=>'px-6 py-4 whitespace-no-wrap border-b border-gray-200',
         ]
     ],
    'status'=>[
        'draft'=>'bg-red-100 text-red-800',
        'revision'=>'bg-gray-100 text-gray-800',
        'published'=>'bg-green-100 text-green-800',
        'deleted'=>'bg-red-200 text-red-900',

    ]
];
