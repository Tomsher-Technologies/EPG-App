<?php

namespace App\Http\Livewire\Admin\Member;

use App\Models\Benefits\Benefit;
use App\Models\Member\Transaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class BenefitList extends Component
{

    use WithPagination;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public $user;
    public $package;
    public $transactions;
    public $search = "";
    public $adminUser;

    public function mount($package, $user)
    {
        $this->user = $user;
        $this->package = $package;
        $this->adminUser = Auth::user();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function redeem(Benefit $benefit)
    {
        Transaction::create([
            'user_id' =>  $this->user->id,
            'benefit_id' => $benefit->id,
            'receptionist_id' => $this->adminUser->id,
            'location_id' => $this->adminUser->location->id,
        ]);

        $this->dispatchBrowserEvent('memberUpdated');

        $this->resetPage();

        $this->render();
    }

    public function render()
    {
        $query = $this->package->benefits();

        $this->transactions = $this->user->transaction()->get();

        if ($this->search !== '') {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        }

        $benefits = $query->paginate(15);

        $usedBenefits = [];


        foreach ($benefits as $benefit) {

            $usedBenefits[$benefit->id] = [];

            $count = $this->transactions->where('benefit_id', $benefit->id)->count();
            $usedBenefits[$benefit->id]['count'] = $count;
            $usedBenefits[$benefit->id]['status'] = 0;

            // If benefit is unlimited
            if ($benefit->isUnlimited()) {
                $usedBenefits[$benefit->id]['status'] = 1;
            }

            // If benefit is limited, the check if limit reached
            if ($benefit->isLimited()) {
                $usedBenefits[$benefit->id]['max_validity'] = $benefit->validity;
                $usedBenefits[$benefit->id]['remining_validity'] = $benefit->validity - $count;
                $usedBenefits[$benefit->id]['used_validity'] = $benefit->validity - $usedBenefits[$benefit->id]['remining_validity'];
                if ($usedBenefits[$benefit->id]['remining_validity'] > 0) {
                    $usedBenefits[$benefit->id]['status'] = 1;
                }
            }

            // If benefit is one day
            if ($benefit->validity_type == 'day') {
                $usedBenefits[$benefit->id]['max_validity'] = $benefit->validity;

                $usedBenefits[$benefit->id]['status'] = 0;

                $c_transaction = $this->transactions->where('created_at', '>=', Carbon::today())->where('created_at', '<', Carbon::tomorrow())->where('benefit_id', $benefit->id);

                if ($c_transaction) {
                    if ($c_transaction->count() < $benefit->validity) {
                        $usedBenefits[$benefit->id]['status'] = 1;
                        $usedBenefits[$benefit->id]['remining_validity'] = $benefit->validity - $c_transaction->count();
                        $usedBenefits[$benefit->id]['used_validity'] = $benefit->validity - $usedBenefits[$benefit->id]['remining_validity'];
                    }
                }
            }

            // If benefit is one week
            if ($benefit->validity_type == 'week') {
                $usedBenefits[$benefit->id]['max_validity'] = $benefit->validity;

                $usedBenefits[$benefit->id]['status'] = 0;

                $c_transaction = $this->transactions->where('created_at', '>=', Carbon::now()->startOfWeek())->where('created_at', '<', Carbon::now()->endOfWeek())->where('benefit_id', $benefit->id);

                if ($c_transaction) {
                    if ($c_transaction->count() < $benefit->validity) {
                        $usedBenefits[$benefit->id]['status'] = 1;
                        $usedBenefits[$benefit->id]['remining_validity'] = $benefit->validity - $c_transaction->count();
                        $usedBenefits[$benefit->id]['used_validity'] = $benefit->validity - $usedBenefits[$benefit->id]['remining_validity'];
                    }
                }
            }

            // If benefit is one month
            if ($benefit->validity_type == 'month') {
                $usedBenefits[$benefit->id]['max_validity'] = $benefit->validity;

                $usedBenefits[$benefit->id]['status'] = 0;

                $c_transaction = $this->transactions->where('created_at', '>=', Carbon::now()->startOfMonth())->where('created_at', '<', Carbon::now()->endOfMonth())->where('benefit_id', $benefit->id);

                if ($c_transaction) {
                    if ($c_transaction->count() < $benefit->validity) {
                        $usedBenefits[$benefit->id]['status'] = 1;
                        $usedBenefits[$benefit->id]['remining_validity'] = $benefit->validity - $c_transaction->count();
                        $usedBenefits[$benefit->id]['used_validity'] = $benefit->validity - $usedBenefits[$benefit->id]['remining_validity'];
                    }
                }
            }

            // If benefit is one month
            if ($benefit->validity_type == 'year') {
                $usedBenefits[$benefit->id]['max_validity'] = $benefit->validity;

                $usedBenefits[$benefit->id]['status'] = 0;

                $c_transaction = $this->transactions->where('created_at', '>=', Carbon::now()->startOfYear())->where('created_at', '<', Carbon::now()->endOfYear())->where('benefit_id', $benefit->id);

                if ($c_transaction) {
                    if ($c_transaction->count() < $benefit->validity) {
                        $usedBenefits[$benefit->id]['status'] = 1;
                        $usedBenefits[$benefit->id]['remining_validity'] = $benefit->validity - $c_transaction->count();
                        $usedBenefits[$benefit->id]['used_validity'] = $benefit->validity - $usedBenefits[$benefit->id]['remining_validity'];
                    }
                }
            }

            // If benefit 

            // Check if mcurrent user is a receptionist
            // if ($this->adminUser->isNotA('superadmin')) {
            //     // Check if benefit has a location, if has location, check if current receptionist location == benefit location
            //     if (
            //         $benefit->location_id &&
            //         $benefit->location_id !== $this->adminUser->location_id
            //     ) {
            //         $usedBenefits[$benefit->id]['status'] = 0;
            //     }
            // }
        }

        // Log::debug($usedBenefits);

        // dd($usedBenefits);

        return view('livewire.admin.member.benefit-list')
            ->with([
                'benefits' => $benefits,
                'usedBenefits' => $usedBenefits,
            ]);
    }
    
    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }
    
}
