<?php

namespace App\Http\Livewire\Admin\Member;

use App\Models\Benefits\Benefit;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class BenefitList extends Component
{

    use WithPagination;

    public $user;
    public $package;
    public $transactions;
    public $search = "";
    public $adminUser;

    public function mount($package, $user)
    {
        $this->user = $user;
        $this->package = $package;
        $this->transactions = $this->user->transaction;
        $this->adminUser = Auth::user();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = $this->package->benefits();

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
                if ($usedBenefits[$benefit->id]['remining_validity'] > 0) {
                    $usedBenefits[$benefit->id]['status'] = 1;
                }
            }

            // If benefit 

            // Check if mcurrent user is a receptionist
            if ($this->adminUser->isNotA('superadmin')) {
                // Check if benefit has a location, if has location, check if current receptionist location == benefit location
                if (
                    $benefit->location_id &&
                    $benefit->location_id !== $this->adminUser->location_id
                ) {
                    $usedBenefits[$benefit->id]['status'] = 0;
                }
            }
        }

        dd($usedBenefits);

        return view('livewire.admin.member.benefit-list')
            ->with([
                'benefits' => $benefits,
                'usedBenefits' => $usedBenefits,
            ]);
    }
}
