<?php

namespace App\Http\Controllers;

use App\Models\Immigration;
use Illuminate\Http\Request;

class ImmigrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $immigrations = Immigration::orderBy('created_at', 'Desc')->paginate(10);
        return view('dashboard.immigration.immigration', compact('immigrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.immigration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $immigration = new Immigration();
       $immigration->fullname = $request->fullname;
       $immigration->email = $request->email;
       $immigration->type = $request->type;
       $immigration->country_code = $request->country_code;
       $immigration->passport_no = $request->passport_no;
       $immigration->nationality = $request->nationality;
       $immigration->date_of_birth = $request->dob;
       $immigration->sex = $request->sex;
       $immigration->place_of_birth = $request->place_of_birth;
       $immigration->personal_no = $request->personal_no;
       $immigration->authority = $request->authority;
       $immigration->date_of_issue = $request->date_of_issue;
       $immigration->date_of_expiry = $request->date_of_expiry;
       $immigration->save();
       return redirect()->back()->with('Success', 'You have successfully registered');
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
        $immigration = Immigration::find($id);
        return view('dashboard.immigration.edit', compact('immigration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $fullname = $request->fullname;
       $email = $request->email;
       $type = $request->type;
       $country_code = $request->country_code;
       $passport_no = $request->passport_no;
       $nationality = $request->nationality;
       $date_of_birth = $request->dob;
       $sex = $request->sex;
       $place_of_birth = $request->place_of_birth;
       $personal_no = $request->personal_no;
       $authority = $request->authority;
       $date_of_issue = $request->date_of_issue;
       $date_of_expiry = $request->date_of_expiry;

       Immigration::find($id)->update([
        'fullname' => $fullname,
        'email' => $email,
        'type' => $type,
        'country_code' => $country_code,
        'passport_no' => $passport_no,
        'nationality' => $nationality,
        'date_of_birth' => $date_of_birth,
        'sex' => $sex,
        'place_of_birth' => $place_of_birth,
        'personal_no' => $personal_no,
        'authority' => $authority,
        'date_of_issue' => $date_of_issue,
        'date_of_expiry' => $date_of_expiry,
       ]);
       return redirect()->back()->with('Success', 'Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       Immigration::find($id)->delete();
       return redirect()->back()->with('Success', 'Candidate deleted successfully');
    }
}
