<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />a
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Quiz</title>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="assets/css/Bootstrap/bootstrap.min.css" />
      <!-- Font Awesome -->
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
         />
      <!-- Custom Style -->
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
      <!-- animation -->
      <link rel="stylesheet" href="{{asset('assets/css/animation.css')}}" />
      <!-- Responsive -->
      <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
      <!-- thankyou -->
      <link rel="stylesheet" href="{{asset('assets/css/thankyou.css')}}" />

      <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 

      <style>
         .options {
         display: flex;
         justify-content: center;
         gap: 0px;
         align-items: center;
         flex-direction: column;
         }
         .options .option {
         width: 69%;
         height: 60px;
         display: grid;
         place-content: center;
         text-align: center;
         position: relative;
         /* margin-top: 53px; */
         }
         .option label {
         font-size: 21px;
         color: rgb(48 51 58);
         font-weight: 500;
         margin-top: 5px;
         }
         .countdown {
         animation: slideUp forwards 1s cubic-bezier(0.23, 1, 0.32, 1);
         display: none;
         }

    
    /* Optional: Style list items */
    #demo1 .list-group-item {
        /* Add some padding and border to make list items visually distinct */
        padding: 5px 10px;
        border: 1px solid #ccc;
        /* Optional: Ensure text doesn't wrap */
        white-space: nowrap;
    }
    main.overflow-hidden {
    background: #012f47;
}

.qNumber {
    color: white;
    font-size: 29px;
}
h1.question {
    color: white;
    font-weight: 400;
    font-size: 28px;
}
fieldset {
    margin-top: 53px;
}

.col.s {
    padding: 0;
    border: 1px solid;
}
.fixed-header.mt-4 {
    margin-top: 0.5rem !important;
    background: white;
}

.options {
    display: flex;
    justify-content: space-evenly;
    gap: 30px;
    align-items: flex-start;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-content: flex-start;
    margin-left: 100px;
    margin-top: 35px;
}

.qst label {
    color: white;
    font-size: 19px;
    font-weight: 500;
}

h1.question {
    color: #012f47;
    font-weight: 700;
    font-size: 28px;
    background: white;
    padding: 60px;
    margin-top: 16px;
    border-radius: 4px;
}
button {
    background: white !important;
    color: #012f47 !important;
    padding: 20px !important;
}




#demo1 {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
    flex-direction: row;
        gap: 10px;
        align-items: center;
}

#demo1 li {
    flex: 0 0 calc(25% - 10px); /* Adjust width to fit 5 items per row with gap */
    margin-bottom: 10px;
}

/* For screens smaller than or equal to 5 items, revert to a single column layout */
@media (max-width: 5 * (calc(25% - 10px))) {
    #demo1 li {
        flex: 1 1 auto; /* Let items grow to fit the container */
    }
}

.stepCounter{
   display: none;
}
      </style>
   </head>
   <body>
      <main class="overflow-hidden">
      <!-- Step Bar -->
      <div class="stepCounter">
         <div class="stepSingle">
           <div class="stepBar"></div>
 
           <span>1</span>
         </div>
         <div class="stepSingle">
           <div class="stepBar"></div>
           <span>2</span>
         </div>
         <div class="stepSingle">
           <div class="stepBar"></div>
 
           <span>3</span>
         </div>
         <div class="stepSingle">
           <div class="stepBar"></div>
 
           <span>4</span>
         </div>
         <div class="stepSingle">
           <div class="stepBar"></div>
 
           <span>5</span>
         </div>
         <div class="bgColor"></div>
       </div>
         <section class="steps container">
            <form
             
               action="{{ route('addquizze') }}"  method="POST"     class="show-section"
               id="quizForm"
               >
               @csrf
               <!-- Step 1 -->
               <fieldset id="step1">
                  <!-- Question Number -->
                  <div class="qNumber">Question 1</div>
                  <!-- Question -->
                  <h1 class="question">Quelles sont les technologies utilisées dans les produits
                     Restylane ?
                  </h1>

                  <label for="myCheckbox" id="myLabel">Click me to check the checkbox</label>
<input type="checkbox" id="myCheckbox">
                  <input type="hidden" name="question1" value="1">
                  <div class="options">
                     <div class=" qst">

                        
                         <input  class="form-check-input" type="checkbox" name="answer[]"  aria-labelledby="checkbox1"  id="checkbox1" value="Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)" />
                         <label for="checkbox1las"  >Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)</label>
                     </div>
                     <div class="qst">
                         <input  class="form-check-input"  type="checkbox" name="answer[]" value=" Technologie CPM (Cohesive Polydensified Matrix)" />
                         <label>Technologie CPM (Cohesive Polydensified Matrix)</label>
                     </div>
                     <div class="qst ">
                         <input  class="form-check-input" type="checkbox" name="answer[]" value="Technologie IPN-Like" />
                         <label>Technologie IPN-Like</label>
                     </div>
                     <div class=" qst">
                         <input class="form-check-input" type="checkbox" name="answer[]" value="Technologie OBT (Optimal Balance Technology)" />
                         <label>Technologie OBT (Optimal Balance Technology)</label>
                     </div>
                     <div class=" qst">
                         <input  class="form-check-input"  type="checkbox" name="answer[]" value="Technologie Vycross" />
                         <label>Technologie Vycross</label>
                     </div>
                 </div>
                 
               </fieldset>
               <!-- Step 2 -->
               <fieldset id="step2">
                  <!-- Question Number -->
                  <div class="qNumber">Question 1</div>
                  <!-- Question -->
                  <input type="hidden" name="question2" value="2">

                  <h1 class="question">Quelles affirmations concernant RESTYLNAE SKINBBOSTERS ?</h1>
                  <div class="options">
                     <div class="qst ">
                        <input type="radio"  class="form-check-input" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie NASHA" />
                        <label> Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie NASHA.</label>
                     </div>
                     <div class="qst ">
                        <input type="radio" class="form-check-input" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie OBT." />
                        <label> Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie OBT.</label>
                     </div>
                     <div class="qst ">
                        <input type="radio" class="form-check-input" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique Non-réticulé ." />
                        <label> Le Restylane Skinboosters est un acide hyaluronique Non-réticulé .</label>
                     </div>
                  </div>
               </fieldset>
               <!-- Step 3 -->
               <fieldset id="step3">
                  <!-- Question Number -->
                  <div class="qNumber">Question 3</div>
                  <!-- Question -->
                  <h1 class="question">Quelle est la quantité et la concentration d'acide hyaluronique (AH) contenues dans une seringue de Restylane Skinboosters ?
                  </h1>
                  <div class="options">
                     <div class="qst animate">
                        <input type="hidden" name="question3" value="3">

                        <input type="radio"  class="form-check-input" name="answer3" value="Restylane Skinboosters propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 1 ml" />
                        <label> Restylane Skinboosters propose une concentration de 20 mg d'acide
                        hyaluronique dans chaque seringue de 1 ml.</label>
                     </div>
                     <div class="qst  animate">
                        <input type="radio" class="form-check-input" name="answer3" value="Restylane Skinboosters propose une concentration de 20 mg d'acide  hyaluronique dans chaque seringue de 3 ml." />
                        <label> Restylane Skinboosters propose une concentration de 20 mg d'acide
                        hyaluronique dans chaque seringue de 3 ml.</label>
                     </div>
                     <div class="qst animate">
                        <input type="radio"  class="form-check-input" name="answer3" value="Restylane Skinboosters propose une concentration de 6,6 mg d'acide  hyaluronique dans chaque seringue de 1 ml." />
                        <label> Restylane Skinboosters propose une concentration de 6,6 mg d'acide
                        hyaluronique dans chaque seringue de 1 ml..</label>
                     </div>
                  </div>
               </fieldset>

                <!-- Step 4 -->
          <fieldset id="step4">
            <!-- Question Number -->
            <div class="qNumber">Question 4</div>

            <!-- Question -->
            <h1 class="question">
              Which former British colony was given back to China in 1997?
            </h1>

            <div class="option animate" style="display: none">
               <input type="radio"  checked id="drgcheck" value="Restylane Skinboosters propose une concentration de 6,6 mg d'acide  hyaluronique dans chaque seringue de 1 ml." />
               <label> Restylane Skinboosters propose une concentration de 6,6 mg d'acide
               hyaluronique dans chaque seringue de 1 ml..</label>
            </div>

            <div class="col">
               <input type="hidden" name="question4" value="4">

               <div class="fixed-header">
                 <h3 style="display: none">Demo 1</h3>
                 <ul class="list-group" id="demo1">
                   <li class="list-group-item">
                     <img src="{{ asset('1.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">
                      <span style="display: none"> Restylane CLASSIC </span>
                   </li>
                   <li class="list-group-item">
                     <img src="{{ asset('2.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">
                     <span style="display: none">RESTYLANE LYFT </span>
                  </li>
                   <li class="list-group-item">
                     <img src="{{ asset('3.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">
                    
                     <span style="display: none"> RESTYLANE KYSSE </span>

                  </li> <br>
                   <li class="list-group-item">
                     <img src="{{ asset('4.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">
                     <span style="display: none">RESTYLANE VOLYME</span></li>
                   <li class="list-group-item">
                     <img src="{{ asset('5.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">

                     <span style="display: none">RESTYLANE REFYNE</span></li>
                   <li class="list-group-item">
                     <img src="{{ asset('6.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">

                     <span style="display: none">RESTYLANE SKINBOOSTERS</span></li>
                   <li class="list-group-item">
                     <img src="{{ asset('7.png') }}" style="width: 200px" alt="RESTYLANE REFYNE">

                     <span style="display: none">RESTYLANE SKINBOOSTERS</span></li>
                 </ul>
               </div>
         
               <div class="row">
                 <div class="col s">
                   <div class="fixed-header mt-4">
                     <h3>Nasha</h3>
                  <input type="hidden" name="demo2_data" id="demo2_data">
                     <ul class="list-group" id="demo2">
                       
                     </ul>
                   </div>
                 </div>
                 <div class="col s">
                   <div class="fixed-header mt-4">
                     <h3>OBT</h3>

                  <input type="hidden" name="demo3_data" id="demo3_data">
                     <ul class="list-group" id="demo3">
                       
                     </ul>
                   </div>
                 </div>
               </div>
         
             </div>

          </fieldset>

          <fieldset id="step5">
            <!-- Question Number -->
           
         </fieldset>
       

            
       <!-- Step 1 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="next" id="step1btn"  onclick="myFunction()">Next Question <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-right" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M14.854 4.854a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 4H3.5A2.5 2.5 0 0 0 1 6.5v8a.5.5 0 0 0 1 0v-8A1.5 1.5 0 0 1 3.5 5h9.793l-3.147 3.146a.5.5 0 0 0 .708.708z"/>
          </svg></button>
       </div>
 
       <!-- Step 2 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step2btn"  >Next Question</button>
       </div>
 
       <!-- Step 3 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step3btn">Next Question</button>
       </div>
       <!-- Step 4 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step4btn">Next Question</button>

      </div>
       <!-- Step 4 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" id="step5btn">Submit</button>

      </div>

        </form>
      </section>
      </main>
      <!-- result -->
      <div class="loadingresult">
         <img src="assets/images/loading.gif" alt="loading" />
      </div>
      <div class="thankyou-page">
         <header class="thankyouheader">
            <h2>Quiz has been taken</h2>
         </header>
         <main class="thankyou-page-inner">
            <img src="assets/images/thankyou-check.png" alt="" />
            <span>Your answer has been submitted</span>
            <h1>Thankyou for taking Quiz</h1>
            <div class="subscribe">
               <input type="text" placeholder="Your Email" />
               <button type="button">subscribe now</button>
            </div>
         </main>
      </div>
      <div id="error"></div>
      <!-- Bootstrap JS -->
      <script src="{{asset('assets/js/Bootstrap/bootstrap.min.js')}}"></script>
      <!-- jQuery -->
      <script src="{{asset('assets/js/jQuery/jquery-3.7.1.min.js')}}"></script>
      <!-- ThankyouJS -->
      <script src="{{asset('assets/js/thankyou.js')}}"></script>
      <!-- Custom JS -->
      <script src="{{asset('assets/js/custom.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/RubaXa/Sortable/Sortable.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>


</script>

   <script>
   Sortable.create(demo1, {
      animation: 100,
      group: 'list-1',
      draggable: '.list-group-item',
      handle: '.list-group-item',
      sort: true,
      filter: '.sortable-disabled',
      chosenClass: 'active'
   });

   Sortable.create(demo2, {
      group: 'list-1',
      handle: '.list-group-item'
   });

   Sortable.create(demo3, {
      group: 'list-1',
      handle: '.list-group-item'
   });
   </script>

<script>
   document.getElementById('myLabel').addEventListener('click', function() {
    var checkbox = document.getElementById('myCheckbox');
    checkbox.checked = !checkbox.checked;
});

</script>

<script>
    
   document.addEventListener('DOMContentLoaded', function() {
      
      document.getElementById('step1btn').addEventListener('click', function() {
        var mainElement = document.querySelector('main.overflow-hidden');
        mainElement.style.transition = 'background-color 1s ease'; // Transition effect
        mainElement.style.backgroundColor = '#FFAF69'; // Change to your desired color
    });
   });

   document.getElementById('step2btn').addEventListener('click', function() {
    var mainElement = document.querySelector('main.overflow-hidden');
    mainElement.style.transition = 'background-color 1s ease'; // Transition effect
    mainElement.style.backgroundColor = '#012f47'; // Change to your original color
});
   </script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        function prepareFormData() {
            var demo2Data = []; 
            $("#demo2 li").each(function() {
                demo2Data.push($(this).text());
            });
            $("#demo2_data").val(JSON.stringify(demo2Data));

            console.log(demo2Data);

            var demo3Data = []; 
            $("#demo3 li").each(function() {
                demo3Data.push($(this).text());
            });
            console.log(demo3Data);

            $("#demo3_data").val(JSON.stringify(demo3Data));
        }

        document.getElementById("submitBtn").addEventListener("click", function(event) {
            prepareFormData();
            document.getElementById("quizForm").submit();
        });
    });
</script>


   </body>
</html>