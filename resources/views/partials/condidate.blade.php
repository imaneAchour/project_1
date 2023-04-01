@extends('app')


{{-- NAV BAR --}}
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
        <a href="/GetJob/company/1" class="h-box flex-align-center nod-link">
            <span class="material-icons-sharp">business</span>
            <p>Entreprise</p>
        </a>
        <a href="/GetJob/condidate/1" class="active h-box flex-align-center nod-link">
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















{{-- CONDIDATE EXIST FOR THE USER --}}
@if ($condidate->count() !=0)
@section('content')
@php
    $condidateFields = $condidate[0];
    $status = $condidateFields->status;
    $checkMaried = "";
    $checkAlone = "";

    if($status == "maried"){
        $checkMaried ="checked";
    }else{
        $checkAlone ="checked";
    }
@endphp
<x-cond-add-message />
<x-cond-upd-message />
<h1>Condidature</h1>

  
    

<form action="/GetJob/condidate/update/{{$condidateFields->user_id}}" method="POST" enctype="multipart/form-data" class="grid-form">
    @csrf
    <input type="hidden" name="id" value="{{$condidateFields->id}}">
    <input type="hidden" name="user_id" value="1">
    <div class="form-field v-box">
        <label>Prenom</label>
        <input type="text" name="first_name" value="{{$condidateFields->first_name}}">
        @error('first_name')        
        <p class="error-mssg">Prenom obliger</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>Nom</label>
        <input type="text" name="last_name" value="{{$condidateFields->last_name}}">
        @error('last_name')      
        <p class="error-mssg">Nom obliger</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>CIN</label>
        <input type="text" name="cin" value="{{$condidateFields->cin}}">
        @error('cin')         
        <p class="error-mssg">Deja existe ou oblige</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>Telephone</label>
        <input type="text" name="phone" value="{{$condidateFields->phone}}">
    </div>
    <div class="form-field v-box span-2">
        <label>email</label>
        <input type="text" name="email" value="{{$condidateFields->email}}">
        @error('email')         
        <p class="error-mssg">Deja existe ou oblige</p>
        @enderror
    </div>

    <div class="form-field v-box">
        <label>Diplome</label>
        <input type="text" name="diplome" value="{{$condidateFields->diplome}}">
    </div>
    <div class="form-field v-box">
        <label>Bac</label>
        <select name="bac" value="{{$condidateFields->bac}}">
            <option value="{{$condidateFields->bac}}" selected>{{$condidateFields->bac}} +</option>
            <option value="0">pas de bac</option>
            <option value="1">+1</option>
            <option value="2">+2</option>
            <option value="3">+3</option>
            <option value="4">+4</option>
            <option value="5">+5</option>
            <option value="6">+6</option>
            <option value="7">+7</option>
        </select>
    </div>
    <div class="form-field v-box">
        <label>Specialite</label>
        <input type="text" name="specialite" value="{{$condidateFields->Specialite}}">
    </div>
    <div class="form-field v-box">
        <label>Experience</label>
        <select name="experience" value="{{$condidateFields->experience}}">
            <option value="{{$condidateFields->experience}}" selected>{{$condidateFields->experience}} ans</option>
            <option value="0">pas de experience</option>
            <option value="1">1 ans</option>
            <option value="2">2 ans</option>
            <option value="3">3 ans</option>
            <option value="4">4 ans</option>
            <option value="5">5 ans</option>
            <option value="6">6 ans</option>
            <option value="7">7 ans</option>
        </select>
    </div>
    <div class="file-uplead v-box flex-justify-center flex-align-center  span-2">
        <input type="hidden" name="oldCv" value="{{$condidateFields->cv}}">
        <input type="file" class="file" name="newCv" >
        <p class="msg">Poser votre cv</p>
        <span class="material-icons-sharp">cloud_upload</span>
    </div>
    <a href="{{asset('pdfs/'.$condidateFields->cv.'')}}" target="blank" class="btn-cv">Votre cv</a>

    <div class="v-box span-2">
        <label>Etat</label>
        <div class="h-box flex-align-center span-full">
            <div><input type="radio" value="maried" name="status" {{$checkMaried}}><label for="">Marier</label></div>
            <div><input type="radio" value="alone" name="status"{{$checkAlone}}><label for="">Celibataire</label></div>
        </div>
    </div>
    <div class="h-box flex-align-center form-btn">
        <a href="/GetJob/condidate/delete/{{$condidateFields->id}}" class="cond-btn del-cond">Supprimer</a>
        <input type="submit" value="Modifier" class="cond-btn cond-sub">
    </div>
    
</form>


<script src="{{asset('js/app.js')}}"></script>







@endsection
@else







{{-- USER DON'T HAVE A CONDIDATE --}}
@section('content')
<x-cond-del-message />
<h1>Condidature</h1>
<p class="cond-info">
    Bienvenue dans votre condidature <br>
    cree la maintenant pour vous pouvez postuler une poste
</p>
@php
    $phone = DB::select('select * from users where id = ?', [1])[0]->phone;
    $email = DB::select('select * from users where id = ?', [1])[0]->email;
@endphp
<form action="/GetJob/condidate/1" method="POST" class="grid-form" enctype="multipart/form-data">
    @csrf 
    <input type="hidden" name="user_id" value="1">
    <div class="form-field v-box">
        <label>Prenom</label>
        <input type="text" name="first_name">
        @error('first_name')        
        <p class="error-mssg">Prenom obliger</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>Nom</label>
        <input type="text" name="last_name">
        @error('last_name')      
        <p class="error-mssg">Nom obliger</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>CIN</label>
        <input type="text" name="cin">
        @error('cin')         
        <p class="error-mssg">Deja existe ou oblige</p>
        @enderror
    </div>
    <div class="form-field v-box">
        <label>Telephone</label>
        <input type="text" name="phone" value="{{$phone}}">
    </div>
    <div class="form-field v-box span-2">
        <label>email</label>
        <input type="text" name="email" value="{{$email}}">
        @error('email')         
        <p class="error-mssg">Deja existe ou oblige</p>
        @enderror
    </div>

    <div class="form-field v-box">
        <label>Diplome</label>
        <input type="text" name="diplome">
    </div>
    <div class="form-field v-box">
        <label>Bac</label>
        <select name="bac">
            <option value="0">pas de bac</option>
            <option value="1">1+</option>
            <option value="2">2+</option>
            <option value="3">3+</option>
            <option value="4">4+</option>
            <option value="5">5+</option>
            <option value="6">6+</option>
            <option value="7">7+</option>
        </select>
    </div>
    <div class="form-field v-box">
        <label>Specialite</label>
        <input type="text" name="specialite">
    </div>
    <div class="form-field v-box">
        <label>Experience</label>
        <select name="experience">
            <option value="0">pas de experience</option>
            <option value="1">ans</option>
            <option value="2">2 ans</option>
            <option value="3">3 ans</option>
            <option value="4">4 ans</option>
            <option value="5">5 ans</option>
            <option value="6">6 ans</option>
            <option value="7">7 ans</option>
        </select>
    </div>
    <div class="file-uplead v-box flex-justify-center flex-align-center  span-2">
        <input class="file" type="file" name="cv">
        <p class="msg">Poser votre cv</p>
        <span class="material-icons-sharp">cloud_upload</span>
    </div>
    <div class="v-box span-2">
        <label>Etat</label>
        <div class="h-box flex-align-center span-full">
            <div><input type="radio" value="maried" name="status" checked><label for="">Marier</label></div>
            <div><input type="radio" value="alone   " name="status"><label for="">Celibataire</label></div>
        </div>
    </div>
    <div class="h-box flex-align-center form-btn">
        <input type="reset" value="Annuler"  class="cond-btn">
        <input type="submit" value="Envoyer" class="cond-btn cond-sub">
    </div>
    
</form>
<script src="{{asset('js/app.js')}}"></script>
@endsection

@endif