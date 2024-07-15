

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #0f3e71;
            overflow: hidden;
        }
        .container {
            max-width: 600px;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .container.show {
            opacity: 1;
            transform: translateY(0);
        }
        .result {
    font-size: 36px;
    margin-bottom: 20px;
    color: #2868ad;
    /* font-weight: bold; */
    font-family: sans-serif;
    font-weight: 700;
}
        .score {
            font-size: 64px;
            color: #4caf50;
            margin-bottom: 30px;
            font-weight: bold;
            font-family: 'Arial Black', sans-serif;
            letter-spacing: 2px;
        }
        .retry-btn {
            padding: 16px 32px;
            background-color: #007bff;
            color: #ffffff;
            border: 2px solid #007bff;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-transform: uppercase;
            font-weight: bold;
            outline: none;
        }
        .retry-btn:hover {
            background-color: transparent;
            color: #007bff;
        }
        @keyframes winner {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .winner {
            animation: winner 1s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="result">Félicitations,   <span style="color: #eb9024"> {{ $user->prenom }} {{ $user->name }}! </span> Vous avez terminé le quiz avec succès. Merci pour votre participation!</div>
        <div class="score"> Score <br /> {{ $score->score }} / 5</div>
    </div>
    

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.container');
            container.classList.add('show');
            container.classList.add('winner'); // Add the winner class to trigger animation
        });

        // setTimeout(function() {
        //     window.location.href = "{{ route('presntation') }}";
        // }, 7000); // 5000 milliseconds = 5 seconds
    </script>
</body>
</html>
