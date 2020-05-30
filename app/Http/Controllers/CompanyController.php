<?php

namespace App\Http\Controllers;

use App\Company;
use App\Mail\CompanyCreatedMail;
use App\Traits\FileTrait;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    use FileTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::latest()->paginate('10');
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $company = new Company();
        $company->name = $request->input('name');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        if ($request->hasFile('logo')) {
            $ruta_logo = $this->upLoadFile('images', $request->file('logo'));
        }
        $company->logo = $ruta_logo;
        $company->save();

        Mail::to('admin@admin.com')->send(new CompanyCreatedMail($request));

        return redirect()->route('company.index')->with('success', '¡Compañía agregada exitosamente!');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        if ($request->hasFile('logo')) {
            $company->logo = $this->upLoadFile($request->file('logo'), $request->input('name'));
        }
        $company->update($request->input());
        return redirect()->route('company.show', $company)
            ->with('success', '¡Datos actualizados correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Company $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $this->deleteFile($company->logo);
        $company->delete();
        return redirect()->route('company.index')->with('success','Compañía eliminada');

    }
}
