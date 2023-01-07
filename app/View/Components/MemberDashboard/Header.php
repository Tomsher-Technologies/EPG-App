<?php

namespace App\View\Components\MemberDashboard;

use Illuminate\View\Component;

class Header extends Component
{

    public $pagename;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pagename)
    {
        $this->pagename = $pagename;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.member-dashboard.header');
    }
}
