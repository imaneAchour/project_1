<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function show($id){
        $id_company = DB::table('companies')
        ->where('id_owner','=',$id)
        ->select('companies.id')
        ->get();
        return view('partials/company',[
            'company' => DB::table('companies')
                ->where('id_owner','=',$id)
                ->select('companies.*')
                ->get(),
            'jobs'=>DB::select('select * from jobs where id_company = ? order by created_at ASC', [$id_company[0]->id]),
            'demands'=>DB::table('companies')
                ->join('jobs', 'companies.id', '=', 'jobs.id_company')
                ->join('demands', 'jobs.id', '=', 'demands.id_job')
                ->select('demands.*')
                ->where('companies.id', '=', $id)
                ->get()
        ]);
    }
}
