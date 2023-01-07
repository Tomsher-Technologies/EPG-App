<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index()
    {
        $settings = Settings::all()->keyBy('name');
        return view('admin.settings.index')->with([
            'settings' => $settings
        ]);
    }


    public function updateSettings(Request $request)
    {
        foreach ($request['name'] as $key => $entry) {
            Settings::where('name', $entry)
                ->update(['value' => $request['value'][$key]]);
        }

        return back()->with(['status' => "Settings Updated"]);
    }
}
