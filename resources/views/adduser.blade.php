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
      height: 100vh;
    }

    body{
        background: #194172 !important;
    }
    button.btn.btn-primary.mt-6 {
    color: #194172;
    background: white;
    width: 200px;
    padding: 11px;
    font-weight: 700;
    font-size: 19px;
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

a.btn {
    border-radius: 0px !important;
}

.form-control {
  border-radius: 0px !important;
}
button {
    border-radius: 0px !important;
}
  </style>
</head>
<body>
  
  <div class="centereds">
    <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="300px" class="mt-4 my-4" > 

  </div>
  <div class="centered mt-4"> <!-- Added mt-4 -->
    <!-- Logo -->
    
    @if (count($errors) > 0)

    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 500px">
      Vous devriez vérifier les champs suivants :
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      @if($errors->any())
      <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
      </ul>
      @endif
  </div>
  @endif
  <!-- Added mt-4 -->

    <div class="mt-6" style="margin-top: 6% ; width: 600px;">
 
      <div class="mt-6 d-flex justify-content-center align-items-center" style=" width: 600px; height: 100px;">
        <div >
            <!-- Logo -->
            <img src="{{ asset('senrt.png') }}" alt="Logo" width="150px" class="mt-4 my-4 logo2" style="background: white;
            width: 182px;
            border-radius: 4px;
            padding-left: 10px;
            padding-right: 10px;
        }">
        </div>
    </div>
    
    
      <form class="mt-6"  action="{{route('adduser') }}" method="POST"> 
          @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form3Example1" style="color: white">Nom</label>
                        <input type="text" id="form3Example1" class="form-control" placeholder="saisir votre nom"  name="name"/>
                    </div>
                </div>
                <div class="col">
                    <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="form3Example2" style="color: white">Prénom</label>
                        <input type="text" id="form3Example2" class="form-control" placeholder="saisir votre prénom" name="prenom" />
                    </div>
                </div>
            </div>

            <div data-mdb-input-init  class="row mb-4">
              <div class="col">
                <label class="form-label"  style="color: white">Spécialite</label>
                <input type="text" id="form3Example2" class="form-control" placeholder="saisir votre specialite" name="specialite" />

              </div>
            </div>
            <!-- Email input -->
            <div data-mdb-input-init  class="row mb-4">
              <div class="col">
                <label class="form-label" for="form3Example3" style="color: white">Gsm</label>
                <input type="number" id="form3Example3" class="form-control" placeholder="saisir votre téléphone"  name="gsm"/>
              </div>
         
            </div>
           
            
            <!-- Submit button -->
            <div class="d-flex justify-content-center m-5">
              <button class="btn btn-primary mt-6 d-flex justify-content-center" type="submit">Valider</button>
            </div>

        </form>
    </div>

</div>




  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
