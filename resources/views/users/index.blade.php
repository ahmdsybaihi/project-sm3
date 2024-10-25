<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <style>
        .body-container {
            font-family: Arial, sans-serif;
            background-color: #f0f0f5;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .title {
            font-size: 2.5em;
            color: #2d3436;
            margin: 20px 0;
            font-weight: bold;
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        .user-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
        }

        .user-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 260px;
            transition: 0.3s;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .user-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .user-name {
            font-size: 1.4em;
            color: #2d3436;
            font-weight: bold;
        }

        .user-info {
            font-size: 1em;
            color: #636e72;
            line-height: 1.6;
        }

        .user-info a {
            color: #0984e3;
            text-decoration: none;
        }

        .user-info a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .user-list {
                flex-direction: column;
                align-items: center;
            }

            .user-card {
                width: 90%;
            }
        }
    </style>
</head>
<body class="body-container">
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
</body>
</html>
