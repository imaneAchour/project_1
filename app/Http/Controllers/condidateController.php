<?php

namespace App\Http\Controllers;

use App\Models\Condidate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class condidateController extends Controller
{
    //create
    public function create($id){
        return view('partials/condidate',[
            'condidate'=>DB::table('condidates')->where('user_id','=',$id)->select('condidates.*')->get()
        ]);
    }
    // delete
    public function delete(Request $request){
        DB::delete(
            'delete from condidates where id=?',
            [$request->id]
        );
        return redirect("/GetJob/condidate/".$request->id."")
            ->with('deleteMssg','Condidature supprimer');
    }

    // store
    public function store(Request $request){
        $formFields = $request->validate([
            'user_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'cin'=>'required',Rule::unique('condidates','cin'),
            'phone'=>'required',
            'email'=>'required|email',Rule::unique('condidates','email'),
            'diplome'=>'required',
            'bac'=>'required',
            'specialite'=>'required',
            'experience'=>'required',
            'cv'=>'required|file|max:10240|mimetypes:application/pdf',
            'status'=>'required'
        ]);

        $cvName = time() . '.' . $request->file('cv')->getClientOriginalExtension();
        $request->file('cv')->move('pdfs', $cvName);
        DB::table('condidates')->insert([
            'user_id'=>$request->user_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'cin'=>$request->cin,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'diplome'=>$request->diplome,
            'bac'=>$request->bac,
            'specialite'=>$request->specialite,
            'experience'=>$request->experience,
            'status'=>$request->status,
            'cv'=>$cvName,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        return redirect('/GetJob/condidate/1')
            ->with('addMssg','Condidature ajoute');
    }
    // update
    public function update(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'user_id'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'cin'=>'required',
            'phone'=>'required',
            'email'=>'required|email',Rule::unique('condidates','email'),
            'diplome'=>'required',
            'bac'=>'required',
            'specialite'=>'required',
            'experience'=>'required',
            'cv'=>'mimes:pdf|max:10240',
            'status'=>'required'
        ]);
        if(isset($request->newCv)){
            $cvName = time() . '.' . $request->file('newCv')->getClientOriginalExtension();
            $request->file('newCv')->move('pdfs', $cvName);
        }else{
            $cvName = $request->oldCv;
        }

        DB::table('condidates')
            ->where('id',$request->id)
            ->update([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'cin'=>$request->cin,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'diplome'=>$request->diplome,
                'bac'=>$request->bac,
                'specialite'=>$request->specialite,
                'experience'=>$request->experience,
                'cv'=>$cvName,
                'status'=>$request->status,
                'updated_at'=>now()
            ]);
        return redirect('/GetJob/condidate/1')->with('updateMssg','Condidature modifier');
    }
}
