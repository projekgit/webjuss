<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<section class="login-container mx-auto">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="text-center fw-bold mb-4">Halaman Login Admin</h3>
        <form action="{{ route('authentinate') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Masukkan Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="password">Masukkan Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
