<?php

namespace App\Http\Controllers;

use App\Models\Inec;
use Illuminate\Http\Request;

class InecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inecs = Inec::orderBy('created_at', 'Desc')->paginate(10);
        return view('dashboard.inec.inec', compact('inecs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('register.inec');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inec = new Inec();
        $inec->fullname = $request->fullname;
        $inec->email = $request->email;
        $inec->code = $request->code;
        $inec->voter_id_no = $request->voter_id_no;
        $inec->delim = $request->delim;
        $inec->date_of_birth = $request->dob;
        $inec->sex = $request->sex;
        $inec->occupation = $request->occupation;
        $inec->address = $request->address;
        $inec->save();
        return redirect()->back()->with('Success', 'You have successfully registered');
    }

    /**
     * Display the specified resource.
     */
    public function show(Inec $inec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $inec = Inec::find($id);
        return view('dashboard.inec.edit', compact('inec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fullname = $request->fullname;
        $email = $request->email;
        $code = $request->code;
        $voter_id_no = $request->voter_id_no;
        $delim = $request->delim;
        $date_of_birth = $request->dob;
        $sex = $request->sex;
        $occupation = $request->occupation;
        $address = $request->address;

        Inec::find($id)->update([
            'fullname' => $fullname,
            'email' => $email,
            'code' => $code,
            'voter_id_no' => $voter_id_no,
            'delim' => $delim,
            'date_of_birth' => $date_of_birth,
            'sex' => $sex,
            'occupation' => $occupation,
            'address' => $address,
        ]);
        return redirect()->back()->with('Success', 'Candidate updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Inec::find($id)->delete();
        return redirect()->back()->with('Success', 'Candidate deleted successfully');
    }
}
