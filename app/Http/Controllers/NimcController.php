<?php

namespace App\Http\Controllers;

use App\Models\Nimc;
use Illuminate\Http\Request;

class NimcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nimcs = Nimc::orderBy('created_at', 'Desc')->paginate(10);
        return view('dashboard.nimc.nimc', compact('nimcs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.nimc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nimc = new Nimc();
        $nimc->fullname = $request->fullname;
        $nimc->email = $request->email;
        $nimc->gender = $request->gender;
        $nimc->tracking_id = $request->tracking_id;
        $nimc->national_id_no = $request->national_id_no;
        $nimc->address = $request->address;
        $nimc->save();
        return redirect()->back()->with('Success', 'You have registered successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $nimc = Nimc::find($id);
       return view('dashboard.nimc.edit', compact('nimc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $gender = $request->gender;
        $tracking_id = $request->tracking_id;
        $national_id_no = $request->national_id_no;
        $address = $request->address;

        Nimc::find($id)->update([
            'fullname' => $fullname,
            'email' => $email,
            'gender' => $gender,
            'tracking_id' => $tracking_id,
            'national_id_no' => $national_id_no,
            'address' => $address
        ]);
        return redirect()->back()->with('Success', 'Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Nimc::find($id)->delete();
        return redirect()->back()->with('Success', 'Candidate deleted successfully');
    }
}
