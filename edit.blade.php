<select value="salle">
@foreach($Salles as $key)
<tbody>
    <option value="{{$key->id}}">
        <td>{{ $key->name }}</td>

    </option>
</tbody>
@endforeach
