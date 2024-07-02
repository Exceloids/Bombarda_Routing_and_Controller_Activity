<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to Simple_Routing_Controller</h1>
    <nav>
        <button><a href="{{ route('about') }}">About Me</a></button>
        <button><a href="{{ route('skills') }}">Skills</a></button>
        <button><a href="{{ route('hobbies') }}">Hobbies</a></button>
    </nav>
</body>
</html>
