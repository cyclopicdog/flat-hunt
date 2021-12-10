<h3>Add a new flat:</h3>
<form action="/controllers/flat-controller.php" method="post" class="flat-entry">
<div class="flat-entry__half">
  <label for="name">give it a name:</label>
  <input type="text" name="name" id="id">  
  
    <br />
  
  <label for="street">street:</label>
    <input type="text" name="street" id="street">
    <br />
  
    <label for="area">area:</label>
    <input type="text" name="area" id="area">
    <br />
  
    <label for="flat_rating">rating:</label>
    <select name="flat_rating" id="flat_rating">
      <option value="">rate the flat bitch!</option>
      <option value="1">1 - super sucky</option>
      <option value="2">2 - just sucky</option>
      <option value="3">3 - meh</option>
      <option value="4">4 - interesting</option>
      <option value="5">5 - me likey a lot</option>
    </select>
</div>
<div class="flat-entry__half">
    <label for="owner_name">owner name:</label>
    <input type="text" name="owner_name" id="owner_id">
    <br />
    <label for="owner_rating">rating:</label>
    <select name="owner_rating" id="owner_rating">
      <option value="">now rate the owner!</option>
      <option value="1">1 - scum</option>
      <option value="2">2 - a bit scummy</option>
      <option value="3">3 - meh</option>
      <option value="4">4 - seemed decent</option>
      <option value="5">5 - could be friends</option>
    </select>
    <br />
    <br />
  
    <input type="submit" value="submit">
</div>

</form>