<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        return view('companies.index',['companies'=>$companies]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //$companies=Company::where('id',$company->id)->first();
        $companies=Company::find($company->id);
        return view('companies.show',['company'=>$companies]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company=Company::find($company->id);
        return view('companies.edit',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $companyUpdate=Company::where('id',$company->id)->update([
            'name'=>$request->input('name'),
        ]);
        if($companyUpdate){
            return redirect()->route('companies.show',['company'=>$company->id])->with('success','company update successfuly');
        }
    }

    public function destroy(Company $company)
    {
        $findCompany=Company::find($company->id);
        if($findCompany->delete()){
            return redirect()->route('companies.index')->with('success','Companies success delete');
        }
    }
}
