<?php

namespace App\Http\Controllers;

use App\Device;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index() {
        $devices = Device::all();
        //dd($devices);
        return view('pages.devices', compact('devices'));              
    }

    public function show($id) {
        $device = Device::findOrFail($id);
        return view('pages.device', compact('device'));
    }

    public function create() {
        return view('pages.device-create');
    }

    public function store(Request $request) {
        Device::create($request -> all());
        return redirect() -> route('devices-index');
    }
}
