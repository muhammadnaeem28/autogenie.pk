<!-- resources/views/auth/register.blade.php -->

<html>
<head>

</head>
<body>

<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        First Name
        <input type="text" name="fname" value="{{ old('name') }}">
    </div>
    <div>
        Last Name
        <input type="text" name="lname" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>


</body>
</html>

