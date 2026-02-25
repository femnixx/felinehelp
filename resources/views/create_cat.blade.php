<h1>Add a New Feline</h1>

<form action="/cats" method="POST">
    @csrf

    <div>
        <label>Name:</label>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>Breed:</label>
        <input type="text" name="breed" required>
    </div>
    
    <button type="submit">Save to Database</button>
</form>

<p><a href="/cats"><- Back to list</a></p>