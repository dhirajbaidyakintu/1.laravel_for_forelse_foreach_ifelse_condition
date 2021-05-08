<h1>Foreach loop some example</h1>
    <Select>
        @foreach($DataKey as $CountryName)
            <option>{{$CountryName}}</option>
        @endforeach
    </Select>
