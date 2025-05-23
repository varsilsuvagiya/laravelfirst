<form action="submit" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >
        <span>@error('name'){{ $message }} @enderror</span>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" >
        <span>@error('email'){{ $message }} @enderror</span>

    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" >
        <span>@error('password'){{ $message }} @enderror</span>

    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" >
        <span>@error('age'){{ $message }} @enderror</span>

    </div>
    <div>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" >
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <span>@error('gender'){{ $message }} @enderror</span>

    </div>
    <div>
        <label for="bio">Biography:</label>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea>
        <span>@error('bio'){{ $message }} @enderror</span>

    </div>
    <button type="submit">Submit</button>
</form>

<span>Previous page URL: {{ URL::previous() }}</span>
<br/>
<span>Current page URL:{{URL::current()}}</span>
<br/>
<span>Previous page URL 2nd way: {{ url()->previous() }}</span>
<br/>
<span>Current page URL 2nd way:{{url()->current()}}</span>
