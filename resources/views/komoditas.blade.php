<!-- komoditas.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Komoditas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Komoditas</h1>

        @foreach ($komoditas as $komoditi)
            <div class="card mb-3">
                <div class="card-header">
                    <h2>{{ $komoditi->name }}</h2>
                </div>
                <div class="card-body">
                    <p>{{ Str::limit($komoditi->description, 100) }}</p>
                    <a href="{{ route('komoditas.show', $komoditi->id) }}" class="btn btn-primary btn-sm">Read More</a>
                </div>
            </div>
        @endforeach
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
