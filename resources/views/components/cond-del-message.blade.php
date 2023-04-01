@if (session()->has('deleteMssg'))
    <div class="class cond-deleted"><p>{{session('deleteMssg')}}</p></div>
@endif