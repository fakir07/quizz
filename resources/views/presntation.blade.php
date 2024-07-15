<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for logo and button positioning */
    .centered {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 80vh;
    }

    body{
        background: #194172 !important;
    }
    a.btn.btn-primary.mt-6 {
    color: #194172;
    background: white;
    width: 200px;
    padding: 11px;
}

p.presnt {
    color: white;
    font-size: 30px;
    font-family: sans-serif;
}

.centereds {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 42px;
    margin-bottom: 60px;
}
  </style>
</head>
<body>

    <div class="centereds">
    <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="300px" > 
    </div>

    <div class="centered d-flex flex-column justify-content-center align-items-center">

        <!-- Logo -->
        <div style="padding-top: 30px ; padding-bottom: 30px"></div>

        <!-- Button -->
        <div class="container">
            <div class="row">
                <div class="col-12 text-center px-5">
                    <p class=" text-center presnt"  >Bienvenue au Quizz Restylane au Congrès de la SOMCPRE 2024 ! <br /> Testez vos connaissances sur les produits de comblement dermique de pointe.   <br />Prêts à relever le défi ? Que le meilleur gagne ! <br/> Et restez jusqu'à la fin du congrès, car un tirage au sort sera organisé le Samedi à 12h pour offrir 10 seringues de la gamme Restylane au médecin gagnant !</p>

                </div>
            </div>
        </div>
    </div>

    <div class="row mx-auto">
        <!-- First column -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="{{ asset('simulation GALDERMA (1)-1.png') }}" alt="Logo" width="200" class="">
        </div>
        <!-- Second column -->
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <a href="{{ route('Commencer') }}" class="btn btn-primary mt-6" style="background: rgba(255, 0, 0, 0); border: none;">
                <img src="{{ asset('droite.png') }}" alt="Logo" width="60px" class="">
            </a>
        </div>
    </div>
    
    
  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
