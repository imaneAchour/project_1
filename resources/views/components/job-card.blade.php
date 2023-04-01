@props(['job'])
@php
    use App\Models\Company;
    $company = Company::find($job->id_company);
@endphp
<a href="/GetJob/job/{{$job->id}}" class="jnd v-box flex-align-center jnd-active">
    <div class="comp-logo">
        <img src="{{asset('images/logohp.png')}}" alt="lg-hp">
    </div>
    <div class="info v-box">
        <h2>{{$company->name}}</h2>
        <p>{{$job->poste}}</p>
        <div class="loc h-box flex-align-center">
            <span class="material-icons-sharp">location_on</span>
            <p>{{$job->city}}</p>
        </div>
        <div class="h-box flex-align-center">
            <span class="material-icons-sharp">engineering</span>
            <p>{{$job->nbr_poste}} places</p>
        </div>
        <div class="h-box extra-info">
            <span class="material-icons-sharp">today</span>
            <small>{{$job->created_at}}</small>
            <span class="material-icons-sharp">touch_app</span>
            <small>5</small>
        </div>
    </div>
    <div class="time-salary v-box ">
        <p class="{{$job->status}}">{{$job->status}}</p>
        <small>date limite</small>
        <p>{{$job->date_limit}}</p>
        <small>Salaire</small>
        <p>{{$job->salary}}<span>MAD</span></p>
    </div>
</a>

