@props(['job'])
<tr class="cp-tb-dt">
    <td>#{{$job->id}}</td>
    <td>{{$job->poste}}</td>
    <td>{{$job->nbr_poste}}</td>
    <td>{{$job->salary}}</td>
    <td>{{$job->date_limit}}</td>
    <td>173</td>
    <td><p class="cp-{{$job->status}}">{{$job->status}}</p></td>
    <td>
        <a href="" title="Modifier">
            <span class="material-icons-sharp">edit</span>
        </a>
       <a href="" title="Arreter">
            <span class="material-icons-sharp">not_interested</span>
       </a>
    </td>
</tr>