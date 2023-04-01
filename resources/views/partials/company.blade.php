
@extends('app')
{{-- nav var  --}}
@section('nav-bar')
    <div class="nav v-box ">
        <h1><span class="lg">Get</span>Job</h1>
        <a  href="" class="profile h-box flex-align-center flex-justify-center">
            <img src="{{asset('images/randomRedGirl.png')}}" alt="profile-picture">
            <div class="v-box">
                <p>Mohamed</p>
                <small>Admin</small>
            </div>
        </a>
        <div class="nod-links v-box">
            <a href="/GetJob" class="h-box flex-align-center nod-link">
                <span class="material-icons-sharp">home</span>
                <p>Home</p>
            </a>
            <a href="" class="active h-box flex-align-center nod-link">
                <span class="material-icons-sharp">business</span>
                <p>Entreprise</p>
            </a>
            <a href="/GetJob/condidate/1" class="h-box flex-align-center nod-link">
                <span class="material-icons-sharp">assignment</span>
                <p>Condidate</p>
            </a>
            <a href="" class="h-box flex-align-center nod-link">
                <span class="material-icons-sharp">email</span>
                <p>Message</p>
            </a>
            <a href="" class="h-box flex-align-center nod-link last">
                <span class="material-icons-sharp">logout</span>
                <p>Deconnecter</p>
            </a>
        </div>
    </div>
@endsection

{{-- content --}}

@section('content')
<div class="v-box flex-align-center cp ">
    <div class="h-box flex-align-center flex-space-between cp-hd">
        <div class="cp-lg-nm h-box flex-align-center">
            <img src="{{asset('images/logohp.png')}}" alt="" class="cp-lg">
            <h1>{{$company[0]->name}}</h1>
        </div>
        <div class="cp-ed-dl h-box flex-align-center">
            <a href="" class="cp-ed h-box flex-align-center">
                <p>Modifier</p>
                <span class="material-icons-sharp">edit</span>
            </a>
            <a href="" class="cp-dl h-box flex-align-center">
                <p>Supprimer</p>
                <span class="material-icons-sharp">delete</span>
            </a>
        </div>
    </div>
    <div class="h-box flex-align-center flex-justify-center flex-space-between cp-ifs">
        <div class="cp-nd-if h-box flex-align-center flex-justify-center">
            <span class="cp-cr material-icons-sharp">watch_later</span>
            <div class="v-box">
                <p>{{$company[0]->created_at}}</p>
                <small class="cp-sm">cree le</small>
            </div>
        </div>
        <div class="cp-nd-if h-box flex-align-center flex-justify-center">
            <span class="cp-pt material-icons-sharp">work</span>
            <div class="v-box">
                @php
                    $jobsPosted = DB::select('select count(*) as jobsPosted from jobs where id_company = ?', [$company[0]->id])[0]
                        ->jobsPosted;
                @endphp
                <p>{{$jobsPosted}}</p>
                <small class="cp-sm">Poste cree</small>
            </div>
        </div>
        <div class="cp-nd-if h-box flex-align-center flex-justify-center">
            <span class="cp-mt material-icons-sharp">task_alt</span>
            <div class="v-box">
                <p>177</p>
                <small class="cp-sm">condidate accepter</small>
            </div>
        </div>
    </div>
    <p>Les Postes</p>
    <div class="cp-tb cp-jb h-box flex-justify-center">
        <table>
            <tr class="cp-tb-hd">
                <th>Poste ID</th>
                <th>Poste</th>
                <th>Place</th>
                <th>Salaire</th>
                <th>Date limite</th>
                <th>Postuler par</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($jobs as $job)
                <x-tab-cp-jobs :job="$job" />
            @endforeach
        </table>
    </div> 
    <p>Les postulations</p>
    <div class="cp-tb  cp-ps h-box flex-justify-center">
        <table>
            <tr class="cp-tb-hd">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Poste ID</th>
                <th>Status</th>
                <th>Date postulation</th>
                <th>Action</th>
            </tr>
            @foreach ($demands as $demand)
                <x-tab-cp-demands :demand="$demand" />
            @endforeach
        </table>
    </div> 

</div>
<script src="{{asset('js/company.js')}}"></script>
@endsection








{{-- guide section --}}
@section('guide')
    <h1>guide</h1>
@endsection