<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
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

         #demo1 {
        /* Set display to flex to make the list items appear in a single line */
        display: flex;
        flex-direction: row;
        /* Optional: Add some space between list items */
        gap: 10px;
        /* Optional: Align items horizontally */
        align-items: center;
    }
    
    /* Optional: Style list items */
    #demo1 .list-group-item {
        /* Add some padding and border to make list items visually distinct */
        padding: 5px 10px;
        border: 1px solid #ccc;
        /* Optional: Ensure text doesn't wrap */
        white-space: nowrap;
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
                  <input type="hidden" name="question1" value="1">
                  <div class="options">
                     <div class="option animate">
                         <input type="checkbox" name="answer[]" value="Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)" />
                         <label>Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)</label>
                     </div>
                     <div class="option animate">
                         <input type="checkbox" name="answer[]" value=" Technologie CPM (Cohesive Polydensified Matrix)" />
                         <label>Technologie CPM (Cohesive Polydensified Matrix)</label>
                     </div>
                     <div class="option animate">
                         <input type="checkbox" name="answer[]" value="Technologie IPN-Like" />
                         <label>Technologie IPN-Like</label>
                     </div>
                     <div class="option animate">
                         <input type="checkbox" name="answer[]" value="Technologie OBT (Optimal Balance Technology)" />
                         <label>Technologie OBT (Optimal Balance Technology)</label>
                     </div>
                     <div class="option animate">
                         <input type="checkbox" name="answer[]" value="Technologie Vycross" />
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
                     <div class="option animate">
                        <input type="radio" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie NASHA" />
                        <label> Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie NASHA.</label>
                     </div>
                     <div class="option animate">
                        <input type="radio" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie OBT." />
                        <label> Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie OBT.</label>
                     </div>
                     <div class="option animate">
                        <input type="radio" name="answer2" value="Le Restylane Skinboosters est un acide hyaluronique Non-réticulé ." />
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
                     <div class="option animate">
                        <input type="hidden" name="question3" value="3">

                        <input type="radio" name="answer3" value="Restylane Skinboosters propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 1 ml" />
                        <label> Restylane Skinboosters propose une concentration de 20 mg d'acide
                        hyaluronique dans chaque seringue de 1 ml.</label>
                     </div>
                     <div class="option animate">
                        <input type="radio" name="answer3" value="Restylane Skinboosters propose une concentration de 20 mg d'acide  hyaluronique dans chaque seringue de 3 ml." />
                        <label> Restylane Skinboosters propose une concentration de 20 mg d'acide
                        hyaluronique dans chaque seringue de 3 ml.</label>
                     </div>
                     <div class="option animate">
                        <input type="radio" name="answer3" value="Restylane Skinboosters propose une concentration de 6,6 mg d'acide  hyaluronique dans chaque seringue de 1 ml." />
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
            <div class="col">
               <input type="hidden" name="question4" value="4">

               <div class="fixed-header">
                 <h3>Demo 1</h3>
                 <ul class="list-group" id="demo1">
                   <li class="list-group-item">Restylane CLASSIC</li>
                   <li class="list-group-item">RESTYLANE LYFT</li>
                   <li class="list-group-item">RESTYLANE KYSSE</li>
                   <li class="list-group-item">RESTYLANE VOLYME</li>
                   <li class="list-group-item">RESTYLANE REFYNE</li>
                   <li class="list-group-item">RESTYLANE SKINBOOSTERS</li>
                 </ul>
               </div>
         
               <div class="row">
                 <div class="col">
                   <div class="fixed-header mt-4">
                     <h3>Demo 2</h3>
                  <input type="hidden" name="demo2_data" id="demo2_data">
                     <ul class="list-group" id="demo2">
                       
                     </ul>
                   </div>
                 </div>
                 <div class="col">
                   <div class="fixed-header mt-4">
                     <h3>Demo 3</h3>

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
         <button type="button" class="next" id="step1btn">Next Question</button>
       </div>
 
       <!-- Step 2 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step2btn">Next Question</button>
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