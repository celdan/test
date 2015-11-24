<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('nerds') }}">View All Nerds</a></li>
        <li><a href="{{ URL::to('nerds/create') }}">Create a Nerd</a>
    </ul>
</nav>

<h1>Create a Nerd</h1>

<form action = "{{ URL::to('nerds/store') }}" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input name = "name" class-"form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input name = "email" class-"form-control">
    </div>
    <div class="form-group">
        <label>Nerd Level</label>
        <input name = "nerd_level" type="number" class-"form-control">
    </div>
    <input name="submit" value="submit" type="submit" class="btn btn-primary">
</form>

</div>
</body>
</html>