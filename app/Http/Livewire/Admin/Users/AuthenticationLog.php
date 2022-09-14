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
    public $logs;
    public $search = '';

    public function mount(User $user)
    {
        $this->user = $user;
        $this->logs = $user->authentications->sortBy('login_at');
        foreach ($this->logs as $log) {
            $agent = new Agent();
            $agent->setUserAgent($log->user_agent);
            $log->user_agent = $agent->platform() . ' - ' . $agent->browser();
        }
    }

    public function render()
    {
        return view('livewire.admin.users.authentication-log')
            ->with([
                'logs' => $this->logs
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
