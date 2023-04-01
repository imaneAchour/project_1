<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Notifications\notif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class jobController extends Controller
{
    public function index(Request $request){
        // start filtering
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        if($request->search){
            $jobs = DB::table('jobs')
                ->join('companies','companies.id','=','jobs.id_company')
                ->where('companies.name','LIKE','%'.$request->search.'%')
                ->select('jobs.*')
                ->get();
        }else{
            $jobs = Job::latest()
            ->get();
        }
        // send data to the view
        return view('partials/jobs-list',[
            'jobs' => $jobs
        ]);
    }
    public function show(Job $job){
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        return view('partials/job-detail',[
            'jobs' => Job::latest()->get(),
            'jobSelected' => DB::table('jobs')->where('id','=',$job->id)->select('jobs.*')->get()->all()
        ]);
    }

    public function apply(Request $request,Job $job){
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        $id_job = $job->id;
        $id_user = Session::get('infoUser')->id; //id du user authentifié
        $id_condidate = DB::table('condidates')->where('user_id','=',$id_user)->select('condidates.id')->get()->all()[0]->id;
        DB::table('demands')
            ->insert([
                'id_job'=>$id_job,
                'id_condidate'=>$id_condidate
            ]);
            if ($request->input('notify_user')) {
                $user = DB::table('condidates')->where('user_id','=',$id_user)->select('condidates.id')->get()->all()[0]->first_name;
                $message = $user.'a postuler'; // Replace this with the actual job title.
                $notification = new notif($message);
                $gest_id = $job->id_company;
                $gest = User::find($gest_id);
                $gest->notify($notification);
            }
        return redirect()->back()->with("addMssg","Postulation termine");

    }

    public function cancel(Job $job){
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        $id_job = $job->id;
        $id_user = Session::get('infoUser')->id;
        $id_condidate = DB::table('condidates')->where('user_id','=',$id_user)->select('condidates.id')->get()->all()[0]->id;
        DB::table('demands')->where('id_job','=',$id_job)->where('id_condidate','=',$id_condidate)->delete();
        return redirect()->back()->with("addMssg","Postulation annuler");
    }

    public function addJob(Request $request){
        // dd($request->all());
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        $request->validate([
            'poste'=>'required',
            'salary'=>'required',
            'city'=>'required',
            'nbr_poste'=>'required',
            'address'=>'required',
            'date_limit'=>'required',
        ]);
        $id_company = $request->id_company;
        DB::table('jobs')->insert([
            'id_company'=>$id_company,
            'poste'=>$request->poste,
            'salary'=>$request->salary,
            'city'=>$request->city,
            'status'=>'available',
            'nbr_poste'=>$request->nbr_poste,
            'address'=>$request->address,
            'requirement'=>$request->requirement,
            'description'=>$request->description,
            'date_limit'=>$request->date_limit,
            'date_entretien'=>$request->date_entretien,
        ]);
        return redirect()->intended(route('company'))->with('addMssg','Condidature ajoute');

    }

    public function delete(Job $job){
        // if(User::RedirectNoLoged()){
        //     return redirect()->intended(route('login'));
        // }
        DB::table('jobs')->where('id','=',$job->id)->delete();
        return redirect()->back()->with('deleteMssg','Poste supprimer');
    }


}
