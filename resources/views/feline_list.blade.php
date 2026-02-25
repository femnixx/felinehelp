<h1>Feline Register</h1>
<ul>
    @foreach($cats as $cat)
        <li>{{ $cat->name }} - ({{ $cat->breed }})</li>  
    @endforeach
</ul>