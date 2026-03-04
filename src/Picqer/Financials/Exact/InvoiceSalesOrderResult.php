<?php

namespace Picqer\Financials\Exact;

/**
 * Class InvoiceSalesOrderResult.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=ReadSalesInvoiceInvoiceSalesOrderResult
 *
 * @property string $ProcessID A guid that is the unique identifier of the process
 * @property string $Errors Error messages when process invoicesalesorder background job
 * @property int $NumberOfCreatedInvoices Number of invoices successfully created
 * @property int $NumberOfFailedInvoices Number of invoices failed to create
 * @property string $Status Status of the process
 */
class InvoiceSalesOrderResult extends Model
{
    use Query\Findable;

    protected $fillable = [
        'ProcessID',
        'Errors',
        'NumberOfCreatedInvoices',
        'NumberOfFailedInvoices',
        'Status'
    ];

    protected $url = 'read/salesinvoice/InvoiceSalesOrderResult';
}
