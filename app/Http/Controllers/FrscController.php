<?php

namespace App\Http\Controllers;

use App\Models\Frsc;
use Illuminate\Http\Request;

class FrscController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frscs = Frsc::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.frsc.frsc', compact('frscs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.frsc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $frsc = new Frsc();
       $frsc->fullname = $request->fullname;
       $frsc->email = $request->email;
       $frsc->license_no = $request->license;
       $frsc->category = $request->category;
       $frsc->date_of_birth = $request->dob;
       $frsc->address  = $request->address;
       $frsc->sex = $request->sex;
       $frsc->height = $request->height;
       $frsc->frst_iss_state = $request->first_iss_state;
       $frsc->blood_group = $request->blood_group;
       $frsc->facial_mark = $request->facial_mark;
       $frsc->glasses = $request->glasses;
       $frsc->replace_no = $request->replace_no;
       $frsc->renewal_no = $request->renewal_no;
       $frsc->next_of_kin = $request->next_of_kin;
       $frsc->date_of_1st_ISS = $request->date_of_iss;
       $frsc->ISS = $request->ISS;
       $frsc->EXP = $request->EXP;
       $frsc->save();
       return redirect()->back()->with('Success', 'You have successfully registered');
    }

    /**
     * Display the specified resource.
     */
    public function show(Frsc $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $frsc = Frsc::find($id);
        return view('dashboard.frsc.edit', compact('frsc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $license_no = $request->license;
        $category = $request->category;
        $date_of_birth = $request->dob;
        $address  = $request->address;
        $sex = $request->sex;
        $height = $request->height;
        $frst_iss_state = $request->first_iss_state;
        $blood_group = $request->blood_group;
        $facial_mark = $request->facial_mark;
        $glasses = $request->glasses;
        $replace_no = $request->replace_no;
        $renewal_no = $request->renewal_no;
        $next_of_kin = $request->next_of_kin;
        $date_of_1st_ISS = $request->date_of_iss;
        $ISS = $request->ISS;
        $EXP = $request->EXP;

        Frsc::find($id)->update([
            'fullname' => $fullname,
            'email' => $email,
            'license_no' => $license_no,
            'category' => $category,
            'date_of_birth' => $date_of_birth,
            'address' => $address,
            'sex' => $sex,
            'height' => $height,
            'frst_iss_state' => $frst_iss_state,
            'blood_group' => $blood_group,
            'facial_mark' => $facial_mark,
            'glasses' => $glasses,
            'replace_no' => $replace_no,
            'renewal_no' => $renewal_no,
            'next_of_kin' => $next_of_kin,
            'date_of_1st_ISS' => $date_of_1st_ISS,
            'ISS' => $ISS,
            'EXP' => $EXP
        ]);
        return redirect()->back()->with('Success', 'Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frsc $id)
    {
        Frsc::find($id)->delete();
        return redirect()->back()->with('Success', 'Candidate deleted successfully');
    }
}
