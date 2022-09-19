<?php

namespace App\Http\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Carbon\Carbon;
use Livewire\WithPagination;
use Rappasoft\LaravelAuthenticationLog\Models\AuthenticationLog as Log;
use Jenssegers\Agent\Agent;


class AuthenticationLog extends Component
{

    use WithPagination;

    public User $user;
    // public $logs;
    public $search = '';

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        $logs = $this->user->authentications()->paginate(15);
        foreach ($logs as $log) {
            $agent = new Agent();
            $agent->setUserAgent($log->user_agent);
            $log->user_agent = $agent->platform() . ' - ' . $agent->browser();
        }
        return view('livewire.admin.users.authentication-log')
            ->with([
                'logs' => $logs
            ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function paginationView()
    {
        return 'admin.parts.custom-pagination-links';
    }
}
