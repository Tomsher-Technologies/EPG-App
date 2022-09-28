<?php

namespace App\Http\Livewire\Tables;

use App\Models\Member\Purchase;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;

final class PurchaseTable extends PowerGridComponent
{
    use ActionButton;

    public User $user;

    public string $sortField = 'created_at';

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Model
    {
        return Purchase::where('user_id', $this->user->id)->get();
        // $purchases = $this->user->purchases;
        // $purchases->load('location');
        // return $purchases;
    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function setUp(): void
    {
        $this
            // ->showCheckBox()
            ->showPerPage(50)
            // ->showExportOption('download', ['excel', 'csv'])
            // ->showSearchInput()
        ;
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        return PowerGrid::eloquent()
            ->addColumn('name')
            ->addColumn('location', function ($entry) {
                return $entry->location->name;
            })
            ->addColumn('quantity', function ($entry) {
                return  $entry->quantity ?? "----";
            })
            ->addColumn('price', function ($entry) {
                return  $entry->price ? "AED " . $entry->price : "----";
            })
            ->addColumn('created_at_formatted', function ($entry) {
                return Carbon::parse($entry->created_at)->format('d/m/Y hh:m:i');
            });
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |

    */
    /**
     * PowerGrid Columns.
     *
     * @return array<int, Column>
     */
    public function columns(): array
    {
        return [
            Column::add()
                ->title('Item Name')
                ->field('item_name')
                ->searchable()
                ->makeInputText('item_name')
                ->sortable(),

            Column::add()
                ->title('Location')
                ->field('location')
                ->searchable()
                ->makeInputText('location')
                ->sortable(),

            Column::add()
                ->title('Quantity')
                ->field('quantity')
                ->sortable()
                ->makeInputRange('quantity', '.', ''),

            Column::add()
                ->title('Price')
                ->field('price')
                ->sortable()
                ->makeInputRange('price', '.', ''),

            Column::add()
                ->title('Purchased At')
                ->field('created_at_formatted')
                ->makeInputDatePicker('created_at'),
        ];
    }

    protected function getListeners(): array
    {
        return array_merge(
            parent::getListeners(),
            [
                'refresh-table'   => 'refreshData'
            ]
        );
    }

    public function refreshData()
    {
        $this->datasource();
    }
}
