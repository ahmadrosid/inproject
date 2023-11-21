<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use App\Filament\Resources\InvoiceResource\Pages\ListInvoices;
use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use App\Utility\Number;

class InvoiceOverview extends BaseWidget
{
    use InteractsWithPageTable;

    public ?Invoice $record = null;

    protected function getTablePage(): string
    {
        return ListInvoices::class;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Total Invoice', $this->getPageTableRecords()->count()),
            Stat::make('Total Paid', "IDR " . Number::format(Invoice::where('status', 'paid')->sum('price'))),
            Stat::make('Pending', Invoice::where('status', 'draft')->sum('status')),
        ];
    }
}
