<!DOCTYPE html>
<html>
<head>
    <title>Test Images - Laravel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .exercise { border: 1px solid #ccc; margin: 10px 0; padding: 15px; }
        img { max-width: 300px; border: 2px solid #000; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Laravel Image Test</h1>
    
    <h2>Direct Image Path Tests</h2>
    <div class="exercise">
        <h3>Direct path: images/newdemos/bench.gif</h3>
        <img src="images/newdemos/bench.gif" alt="Direct path" onerror="this.nextSibling.innerHTML='❌ Failed to load: images/newdemos/bench.gif';" onload="this.nextSibling.innerHTML='✅ Successfully loaded';">
        <span class="error"></span>
    </div>
    
    <div class="exercise">
        <h3>Asset helper: {{ asset('images/newdemos/bench.gif') }}</h3>
        <img src="{{ asset('images/newdemos/bench.gif') }}" alt="Asset helper" onerror="this.nextSibling.innerHTML='❌ Failed to load: {{ asset('images/newdemos/bench.gif') }}';" onload="this.nextSibling.innerHTML='✅ Successfully loaded';">
        <span class="error"></span>
    </div>
    
    <h2>Database Exercises</h2>
    @foreach($exercises as $exercise)
    <div class="exercise">
        <h3>{{ $exercise->name }} - {{ $exercise->muscle_group }}</h3>
        <p><strong>Image path in DB:</strong> {{ $exercise->image }}</p>
        <p><strong>Asset URL:</strong> {{ asset($exercise->image) }}</p>
        
        @if($exercise->image)
            <img src="{{ asset($exercise->image) }}" alt="{{ $exercise->name }}" 
                 onerror="this.nextSibling.innerHTML='❌ Failed to load: {{ asset($exercise->image) }}';" 
                 onload="this.nextSibling.innerHTML='✅ Successfully loaded';">
            <span class="error"></span>
        @else
            <p class="error">No image path in database</p>
        @endif
    </div>
    @endforeach
    
    <h2>File System Check</h2>
    <div class="exercise">
        <h3>File existence check</h3>
        <p>Checking if file exists: public/images/newdemos/bench.gif</p>
        @php
            $filePath = public_path('images/newdemos/bench.gif');
            $exists = file_exists($filePath);
            $readable = is_readable($filePath);
        @endphp
        <p>File exists: {{ $exists ? 'YES' : 'NO' }}</p>
        <p>File readable: {{ $readable ? 'YES' : 'NO' }}</p>
        <p>Full path: {{ $filePath }}</p>
    </div>
</body>
</html>
