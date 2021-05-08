<h1>For else loop some example</h1>
    @forelse($DataKey as $CountryName)
        <li>
            {{$CountryName}}
        </li>
    @empty
        <h3>There is no data found.</h3>>
    @endforelse

