<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Személyes adatok</title>
</head>
<body>
    <div class="container bg-secondary text-white rounded p-3 m-3">
        <div class="row">
            <div class="col-6">
                <h1>Személyes adatok</h1>
                <form method="_POST">
                    <label for="vez_nev">Vezetéknév:</label>
                    <input type="text" name="vez_nev" id="vez_nev" class="form-control">
                    <label for="ker_nev">Keresztnév:</label>
                    <input type="text" name="ker_nev" id="ker_nev" class="form-control">
                    <label for="szul_ido">Születési idő:</label>
                    <input type="date" name="szul_ido" id="szul_ido" class="form-control">
                    <button type="submit" class="btn btn-dark m-2">Rögzítés</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>