@props(['demand'])
@php
    $first_name = DB::table('condidates')
        ->where('id', '=', $demand->id_condidate)
        ->select('condidates.first_name')
        ->get()[0]->first_name;
    $last_name = DB::table('condidates')
        ->where('id', '=', $demand->id_condidate)
        ->select('condidates.last_name')
        ->get()[0]->last_name;
@endphp

<tr class="cp-tb-dt">
    <td>{{ $first_name }}</td>
    <td>{{ $first_name }}</td>
    <td>{{ $demand->id_job }}</td>
    <td class="cp-st">
        <p class="cp-{{ $demand->status }}">{{ $demand->status }}</p>
    </td>
    <td>{{ $demand->created_at }}</td>
    <td><a href="" class="cp-tp-ac">Traiter</a></td>
</tr>
