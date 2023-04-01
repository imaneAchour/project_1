@extends('app')

@section('nav-bar')
    <div class="nav v-box ">
        <h1><span class="lg">Get</span>Job</h1>
        <a href="" class="profile h-box flex-align-center flex-justify-center">
            <img src="{{ asset('images/randomRedGirl.png') }}" alt="profile-picture">
            <div class="v-box">
                <p>Monsieur</p>
                <small>Admin</small>
            </div>
        </a>
        <div class="nod-links v-box">
            <a href="/GetJob" class="active h-box flex-align-center nod-link">
                <span class="material-icons-sharp">home</span>
                <p>Home</p>
            </a>
            <a href="/GetJob/company/1" class="h-box flex-align-center nod-link">
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
            <div>
                <label><input type="radio" name="notify_user" value="1"> Notification</label>
            </div>
        </div>
    </div>
@endsection


@section('content')
    <div class="search">
        <form action="/GetJob" method="get" class="h-box">
            <div class="h-box">
                <input type="text" name="search" placeholder="Chercher par entreprise">
                <a href="/GetJob" title="reset filter" type="button"
                    class="reset-filter h-box flex-align-center flex-justify-center">
                    <span class="material-icons-sharp">restart_alt</span>
                </a>
                <button id="search">
                    <span class="material-icons-sharp">search</span>
                </button>
            </div>
        </form>
    </div>
    <div class="jobs-nods v-box flex-align-center">
        <div class="jtp h-box flex-align-center flex-space-between">
            <div class="h-box">
                <p>Les postes trouvees</p>
                <span>105</span>
            </div>
            <div class="h-box flex-align-center">
                <p>Filter</p>
                <button type="button" id="time-filter" class="h-box flex-align-center flex-justify-center">
                    <p>Recent</p>
                    <span class="material-icons-sharp">arrow_drop_down</span>
                </button>
            </div>
        </div>
        <!-- jobs nods-jnds -->
        @if ($jobs->isEmpty())
            <small>aucun resultat</small>
        @else
            @foreach ($jobs as $job)
                <x-job-card :job="$job" />
            @endforeach
        @endif
    </div>
@endsection
@section('jobDetail')
    @php
        use App\Models\Company;
        $company = Company::find($jobSelected[0]->id_company);
    @endphp
    <img src="{{ asset('images/logohp.png') }}" alt="">
    <h1>{{ $company->name }}</h1>
    <p class="{{ $jobSelected[0]->status }}">{{ $jobSelected[0]->status }}</p>
    <p>{{ $jobSelected[0]->poste }}</p>
    <small>{{ $jobSelected[0]->address }}</small>
    <div class="line"></div>
    <div class="besoin">
        <p>Besoin</p>
        <small>{{ $jobSelected[0]->requirement }}</small>
    </div>
    @if ($jobSelected[0]->status == 'available')
        <a href="" class="apply">Postuler</a>
    @endif
    </div>
@endsection
