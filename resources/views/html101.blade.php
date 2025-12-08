@extends('template.default')

@section('content')

    <div class="container">

    <div class="form-group">
        <label for="fname">First name</label>
        <input type="text" id="fname" name="fname">
    </div>

    <div class="form-group">
        <label for="sname">Last name</label>
        <input type="text" id="sname" name="sname">
    </div>

    <div class="form-group">
        <label for="inputPassword6">Password</label>
        <input type="password" id="inputPassword6">
    </div>

    <div class="form-group">
        <label for="birthDate">Birth Date</label>
        <input type="date" id="birthDate">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" id="age">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <label><input type="checkbox"> Male</label>
        <label><input type="checkbox"> Female</label>
    </div>

    <div class="form-group">
        <label for="picture">Picture</label>
        <input type="file" id="picture">
    </div>

    <div class="form-group">
        <label>Address</label>
        <textarea rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="favorite-color">Favorite Color</label>
        <select id="favorite-color">
            <option value="red">Red</option>
            <option value="white">White</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
        </select>
    </div>

    <div class="form-group">
        <label for="favorite-song-genre">Favorite Song Genre</label>
        <select id="favorite-song-genre">
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="country">Country</option>
            <option value="heavy-metal">Heavy Metal</option>
        </select>
    </div>

    <div class="form-group">
        <label><input type="checkbox" id="agree"> Agree to collect data</label>
    </div>

    <div class="button-group">
        <button type="reset" id="resetBtn">Reset</button>
        <button type="button" id="saveBtn">Save</button>
    </div>

    <script>

    </script>
</div>
@endsection