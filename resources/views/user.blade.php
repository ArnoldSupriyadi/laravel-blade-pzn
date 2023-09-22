@once
    <style>
        .red {
            color: red;
        }
    </style>    
@endonce

<h1>{{ $user['name'] }}</h1>

    <li>
        @foreach ($user['hobbies'] as $hobby)
            <li class="red">{{ $hobby }}</li>
        @endforeach
    </li>