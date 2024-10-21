// ini halaman index
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sediment Deposition Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sediment Deposition Calculator</h2>
        <p>This calculator estimates sediment deposition accumulation over a month based on given parameters.</p>

        <div class="result">
            <h3>Result:</h3>
            @isset($result)
                <p>{{ $result }}</p>
            @else
                <p>Enter values and submit the form to calculate sediment deposition.</p>
            @endisset
        </div>

        <form method="post" action="/calculate-deposition">
            @csrf
            <label for="D">Laju Deposisi Sedimen (D) in g/s/m³:</label>
            <input type="text" name="D" id="D" required>
            
            <label for="A">Luas Permukaan Danau (A) in m²:</label>
            <input type="text" name="A" id="A" required>

            <button type="submit">Calculate</button>
        </form>
    </div>
</body>
</html>
