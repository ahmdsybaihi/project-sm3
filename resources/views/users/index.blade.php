<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        .user-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 300px;
        }

        h4, p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>User List</h1>

    <div class="user-list">
        @foreach ($users as $user)
        <div class="user-card">
            <h4>{{ $user['name'] }} ({{ $user['username'] }})</h4>
            <p><strong>Email:</strong> {{ $user['email'] }}</p>
            <p><strong>Phone:</strong> {{ $user['phone'] }}</p>
            <p><strong>Website:</strong> <a href="http://{{ $user['website'] }}" target="_blank">{{ $user['website'] }}</a></p>
            <p><strong>Address:</strong> {{ $user['address']['street'] }}, {{ $user['address']['suite'] }}, {{ $user['address']['city'] }}, {{ $user['address']['zipcode'] }}</p>
            <p><strong>Company:</strong> {{ $user['company']['name'] }} -- "{{ $user['company']['catchPhrase'] }}"</p>
        </div>
        @endforeach
    </div>
</body>
</html>
