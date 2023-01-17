<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function store(Request $request)
    {

        return Device::create([
            'name' => $request -> name,
            'height' => $request -> height,
            'width'  => $request -> width
        ]);

    }
    public function fetchData(){
        return Device::all();
    }

    public function destroy($id){
        return Device::find($id)->delete();
    }

    public function show($id)
    {
        return Device::find($id);
    }

    public function update(Request $request, $id){
        return Device::find($id)->update([
            "name" => $request->name,
            "height"  => $request->height,
            "width" => $request->width
        ]);
    }
}
