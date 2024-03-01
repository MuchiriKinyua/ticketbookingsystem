<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ route('admin.create') }}">Create Event</a>
<a href="{{ route('admin.index') }}">Event List</a>
<a href="{{ route('admin.edit', $eventId) }}">Edit Event</a>
</body>
</html>
