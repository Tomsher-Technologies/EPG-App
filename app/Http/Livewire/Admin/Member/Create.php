<?php

namespace App\Http\Livewire\Admin\Member;

use App\Models\Common\Country;
use App\Models\Location\Package;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Bouncer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;


class Create extends Component
{

    public $countries;
    public $packages;

    // Models
    public $name;
    public $email;
    public $phone;
    public $nationality;
    public $package;
    public $password;

    protected function rules()
    {
        return [
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'phone' => 'required',
            'password' => ['required', 'min:6'],
            'nationality' => 'required',
            'package' => 'required',
        ];
    }

    protected $messages = [
        'name.required' => 'Please enter a name',
        'email.required' => 'The email address cannot be empty.',
        'phone.required' => 'The phone number cannot be empty.',
        'password.required' => 'Please enter a password',
        'password.min' => 'Password should be atleast 6 characters long',
        'email.email' => 'The email address format is not valid.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        $this->packages = Package::whereStatus(true)->get();
        $this->countries = Country::all();
    }

    public function save()
    {
        $validatedData = $this->validate();
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'status' => 1,
            'password' => Hash::make($this->password),
            'location_id' => 0,
        ]);

        Bouncer::assign('member')->to($user);

        $slug = (string) Str::uuid();

        $selectedPackage = $this->packages->find($this->package);
        $expiry_date = Carbon::now()->addYears($selectedPackage->validity)->startOfDay();

        $user->member_details()->create([
            'phone' => $this->phone,
            'nationality' => $this->nationality,
            'package_id' => $this->package,
            'total_earned' => 0,
            'total_redeemed' => 0,
            'last_used' => NULL,
            'first_used' => NULL,
            'slug' => $slug,
            'expiry_date' => $expiry_date,
            'purchase_date' => Carbon::now(),
        ]);

        $output_file = 'qr-code/img-' . $user->id . '.svg';
        $qrString = QrCode::size(150)
            ->style('round')
            ->eye('circle')
            // ->gradient(215, 190, 105, 160, 113, 60, 'vertical')
            ->errorCorrection('H')
            ->generate(route('qrscan', $slug));
        Storage::disk('public')->put($output_file, $qrString);

        $this->reset('name');
        $this->reset('email');
        $this->reset('password');
        $this->reset('phone');
        $this->reset('nationality');
        $this->reset('package');
        $this->dispatchBrowserEvent('memberUpdated');
    }

    public function render()
    {
        return view('livewire.admin.member.create');
    }
}
