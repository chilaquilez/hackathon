<form method="POST" action="submit.php">

<label for="name">Name:</label>
<input type="text" id="name" name="name">

<label for="email">EPCC email:</label>
<input type="email" id="email" name="email">

<label for="track">Track:</label>
<input type="radio" id="track" name="track">

<label for="shirt">T-Shirt size:</label>
<select name="shirt" id="shirt">
    <option value="S">Small</option>
    <option value="M">Medium</option>
    <option value="L">Large</option>
</select>

<label for="laptop">I need a loaner laptop</label>
<input type="checkbox" id="laptop" name="laptop" value="yes">

<button type="submit" name="submit">Submit</button>

</form>