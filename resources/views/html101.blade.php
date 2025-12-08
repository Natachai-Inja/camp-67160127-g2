<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop-67160127-g2</title>
</head>
<body>
  <div class="align-items-center">
    <div class="col-auto">
      <label for="fname">First name</label>
      <input type="text" id="fname" name="fname">
      <label for="sname">Last name</label>
      <input type="text" id="sname" name="sname">
    </div>
  </div>
    <div class="align-items-center">
  <div class="col-auto">
    <label for="inputPassword6" class="col-form-label">Password</label>
    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
  </div>
  <div class="align-items-center">
    <label for="date">Birth Date</label>
    <input type="date">
  </div>
  <div class="align-items-center">
    <label for="age">Age</label>
    <input type="text" id="age" name="age">
  </div>
  <div class="align-itens-center">
    <label for="gender"> Gender</label>
    <input type="checkbox" id="male" name="male" value="gender">
    <label for="text">Male</label>
    <input type="checkbox" id="female" name="female" value="gender">
    <label for="text">Female</label>
  </div>
  <div class="align-items-center">
    <label for="picture">Picture</label>
    <input type="file" id="picture" name="picture">
  </div>
  <label for="text">Address</label>
  <div class="align-items-center">
    <textarea id="address" name="address" rows="5" cols="50"></textarea>
  </div>
  <div class="align-items-center">
    <label for="favorite-color">Favorite Color</label>
    <select name="color" id="favorite-color">
      <option value="red">Red</option>
      <option value="white">White</option>
      <option value="blue">Blue</option>
      <option value="yellow">Yellow</option>
    </select>
  </div>
  <div class="align-items-center">
    <label for="favorite-song-genere">Favorite Songe Genre</label>
    <select name="songs" id="favorite-song-genere">
      <option value="rock">Rock</option>
      <option value="pop">Pop</option>
      <option value="country">Country</option>
      <option value="heavy-metal">Heavy Metal</option>
    </select>
  </div>
  <div class="align-items-center">
    <input type="checkbox" name="agree" id="agree">
    <label for="text">Agree to collect data</label>
  </div>
  <div class="align-items-center">
    <button type="button" id="refreshButton">Reset</button>
    <button type="button" id="refreshButton">Save</button>
  </div>
</div>
<script>
      const refreshBtn = document.getElementById("refreshButton");

      function handleClick() {
        window.location.reload();
      }

      refreshBtn.addEventListener("click", handleClick);
    </script>
</body>
</html>