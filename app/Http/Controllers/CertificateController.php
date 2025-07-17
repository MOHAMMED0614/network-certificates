<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Certificates;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificates::all();
        $certificates = Certificates::orderBy('created_at', 'desc')->get();
        return view('certificates.List', compact('certificates'));
    }

public function create(){
    return view('certificates.add');
}
    public function store(Request $request)
    {
        Certificates::create($request->all());
        return redirect()->route('certificates.index')->with('success', 'Certificate added successfully!');
    }
    public function show($id)
    {
        $certificate = Certificates::findOrFail($id);
        
        return view('certificates.show', compact('certificate'));
    }

    public function edit(Certificates $certificate ,$id)
    {
        $certificate = Certificates::findOrFail($id);
        return view('certificates.edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificates::findOrFail($id);

        $certificate->update($request->all());

        return redirect()->route('certificates.index')->with('success', 'Certificate updated successfully!');
    }
    public function destroy(Certificates $certificateId)
    {
        $certificateId->delete();
        return redirect()->route('certificates.index')->with('success', 'Certificate deleted.');
    }

}


