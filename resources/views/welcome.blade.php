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
    width: 300px;
    padding: 24px;
    font-size: 30px;
    font-weight: 700;
}
.centereds {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 42px;
    margin-bottom: 60px;
}
a.btn {
    border-radius: 0px !important;
}
  </style>
</head>
<body>



  <div class="centered">
    <!-- Logo -->
    <img src="{{ asset('quizz png.png') }}" alt="Logo" width="400px"  style="margin-bottom: 200px"><br>    <!-- Button -->
  
    
    <a href="{{ route('user') }}" class="btn btn-primary mt-6">Commencer</a>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
