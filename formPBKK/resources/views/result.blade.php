<!DOCTYPE html>
<html>
<head>
    <title>Formulir</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/form.css') }}">
</head>
<body>
    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="result">
        <h1>Hasil</h1>
        <hr>
        @foreach($results as $key => $result)
            <a>
            @if($key == 'Float')
                {{ $key }} = {{ number_format(floatval($result), 2) }} <br>
            @else
                {{ $key }} = {{ $result }} <br>
                @if($key == 'Image')
                    <img src="{{ asset('storage/images/' . $result) }}">
                @endif
            @endif            
            </a>
            
        @endforeach
    </div>
</body>
</html>
