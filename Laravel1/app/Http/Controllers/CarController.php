<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cars'] = DB::table('cars')->paginate(5);
        return view('motor', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'plat' => 'required|min:5|unique:cars',
            'nama_motor' => 'required',
            'alamat' => 'required|min:2',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);
        if ($request->hasfile('image')) {
            $image = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('image')->getClientOriginalName());
            $request->file('image')->move(public_path('img'), $image);
        }
        $query = Car::create([
            'plat' => $request->plat,
            'nama_motor' => $request->nama_motor,
            'alamat' => $request->alamat,
            'image' => $image
        ]);
        if ($query) {
            return redirect('/motor');
        } else {
            return redirect('/motor');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car, string $id)
    {
        $data['car'] = DB::table('cars')->where('id', $id)->first();
        return view('updatemotor', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = DB::table('cars')->where('id', $id)->update([
            'plat' => $request->plat,
            'nama_motor' => $request->nama_motor,
            'alamat' => $request->alamat
        ]);
        if ($query) {
            return redirect('/motor');
        } else {
            return redirect('/motor');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car, string $id)
    {
        $query = DB::table('cars')->where('id', $id)->delete();
        if ($query) {
            return redirect('/motor');
        } else {
            return redirect('/motor');
        }
    }
}
