<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .title {
            font-size: 2em;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .user-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 15px;
        }

        .user-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            flex: 1 1 300px; /* Menetapkan lebar minimum */
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.2s;
        }

        .user-card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .user-name {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .user-info {
            font-size: 0.9em;
            color: #666;
            margin-bottom: 4px;
        }

        .user-info a {
            color: #3498db;
            text-decoration: none;
        }

        .user-info a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">User List</div>
        <div class="user-list">
            @foreach ($users as $user)
            <div class="user-card">
                <div class="user-name">{{ $user['name'] }} ({{ $user['username'] }})</div>
                <div class="user-info"><strong>Email:</strong> {{ $user['email'] }}</div>
                <div class="user-info"><strong>Phone:</strong> {{ $user['phone'] }}</div>
                <div class="user-info"><strong>Website:</strong> <a href="http://{{ $user['website'] }}" target="_blank">{{ $user['website'] }}</a></div>
                <div class="user-info"><strong>Address:</strong> {{ $user['address']['street'] }}, {{ $user['address']['suite'] }}, {{ $user['address']['city'] }}, {{ $user['address']['zipcode'] }}</div>
                <div class="user-info"><strong>Company:</strong> {{ $user['company']['name'] }} — "{{ $user['company']['catchPhrase'] }}"</div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
