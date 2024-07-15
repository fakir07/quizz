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
  color: #012f47;
    font-size: 38px;
    margin-bottom: 20px;
    font-weight: 750;
    text-transform: uppercase;
    font-family: sans-serif;
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
    background: rgba(255, 255, 255, 0) !important;
    color: #ffffff !important;
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
#demo11 {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    list-style: none;
    padding: 0;
    flex-direction: row;
        gap: 10px;
        align-items: center;
}

#demo11 li {
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

ul#demo22 li {
    background: #ffffff00;
    padding: 25px;
    border: 1px solid;
    color: white;
    list-style-type: none;
}

#demo33 .list-group-item {
    position: relative;
    display: block;
    padding: 0.6rem 1.25rem;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, .125);
}
ul#demo22 li {
    background: #ffffff00;
    padding: 25px;
    border: 1px solid;
    color: white;
    list-style-type: none;
    padding: 20px;
    height: 122px;
    text-align: left;
}

input#DEFYNE:checked {
    background: #aefcfb;
    border: white;
}
input#REFYNE:checked {
    background: #a8a7d0;
    border: white;
}
input#RESTYLNAE:checked {
    background: #ffb15e;
    border: white;
}
input#KYSSE:checked {
    background: #f1c2cb;
    border: white;
}
input#VOLYME:checked {
    background: #a0a09c;
    border: white;
}
input#LIDOCAINE:checked {
    background: #2f487e;
    border: white;
}

input#LYFT:checked {
    background: #ccfffe;
    border: white;
}

.form-check-input {
    position: absolute;
    margin-top: 10px;
    margin-left: -2.25rem;
    font-size: 26px;
}
.qst label {
    color: white;
    font-size: 29px;
    font-weight: 500;
}

.nextPrev {
    width: 100%;
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 30px;
}
button.next {
    background: white !important;
    color: #012f47 !important;
    padding-left: 60px !important;
    padding-right: 60px !important;
    height: 67px !important;
    border-radius: inherit !important;
    font-size: 26px !important;
    font-family: sans-serif !important;
    font-weight: 700 !important;
}

button.prev {
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

                <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="200px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 

                  <!-- Question Number -->
                  <!-- Question -->
                  <h1 class="question">                   <div class="qNumber">Question 1</div>

                    Quelles sont les technologies utilisées dans les produits
                     Restylane ?
                  </h1>
                  <input type="hidden" name="question1" value="1">
                  <div class="options">
                     <div class=" qst">
                         <input  class="form-check-input" type="checkbox" name="answer[]"   id="checkbox1" value="Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)"/>
                         <label>Technologie NASHA (Non-Animal Stabilized Hyaluronic Acid)</label>
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

                     <label  style="font-size: 30px;
                     font-weight: col;
                     font-weight: 600;
                     color: white;
                     padding-top: 20px;
                     padding-bottom: 20px;"> Plusieurs choix  sont possibles. </label>
                 </div>
               </fieldset>
               <!-- Step 2 -->
               <fieldset id="step2">
                <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="200px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 

                  <!-- Question Number -->
                  <!-- Question -->
                  <h1 class="question">                  <div class="qNumber">Question 2</div>
                    Faites glisser et déposez les produits
                     dans les catégories NASHA ou OBT
                     selon ce qui convient ?</h1>
                     <input type="checkbox" checked style="display: none">
                     <div class="col">
                        <input type="hidden" name="question2" value="2">
                        <div class="fixed-header">
                          <h3 style="display: none">Demo 1</h3>
                          <ul class="list-group" id="demo1">
                            <li class="list-group-item"> <span style="display: none">DEFYNE</span>
                              <img src="{{ asset('1.png') }}" style="width: 200px" >
                            </li>
                            <li class="list-group-item">
                              <span style="display: none">REFYNE</span>
                              <img src="{{ asset('2.png') }}" style="width: 200px" >
                           </li>
                            <li class="list-group-item"> <span style="display: none">KYSSE</span> 
                              <img src="{{ asset('4.png') }}" style="width: 200px" >
                           </li>
                            <li class="list-group-item"><span style="display: none">VOLYME</span>
                              <img src="{{ asset('5.png') }}" style="width: 200px" >
                              </li>
                            <li class="list-group-item">
                              <span style="display: none">LIDOCAINE</span>
                              <img src="{{ asset('6.png') }}" style="width: 200px" ></li>
                            <li class="list-group-item">
                              <span style="display: none">LYFT</span>
                              <img src="{{ asset('7.png') }}" style="width: 200px" ></li>
                          </ul>


                          <input type="hidden" name="user_id" value="{{ $user->id }}">

                           
                           
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
               <!-- Step 3 -->
               <fieldset id="step3">
                <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="200px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 

                  <h1 class="question">                  <div class="qNumber">Question 3</div>

                     Sur le tableau, veuillez positionner
                      chaque produit Restylane en fonction
                      de sa description correspondante
                                        </h1>
       
                   <div class="option animate" style="display: none">
                      <input type="radio"  checked id="drgcheck" value="Restylane Skinboosters propose une concentration de 6,6 mg d'acide  hyaluronique dans chaque seringue de 1 ml." />
                      <label> Restylane Skinboosters<span>&#8482;</span>  propose une concentration de 6,6 mg d'acide
                      hyaluronique dans chaque seringue de 1 ml..</label>
                   </div>
                   <div class="col ">
                     <div class="fixed-header">
                        <h3 style="display: none">Demo 1</h3>
                        <ul class="list-group" id="demo11">
                          <li class="list-group-item">
                           <span style="display: none" >LIDOCAINE</span>
                            <img src="{{ asset('66.png') }}" style="width: 200px" >
                          </li>
                          <li class="list-group-item">
                           <span style="display: none">DEFYNE</span>
                            <img src="{{ asset('11.png') }}" style="width: 200px" >
                         </li>
                          <li class="list-group-item"> <span style="display: none">KYSSE</span>
                            <img src="{{ asset('44.png') }}" style="width: 200px" >
                         </li>
                          <li class="list-group-item"> <span style="display: none">REFYNE</span>
                            <img src="{{ asset('22.png') }}" style="width: 200px" >
                           </li>
                     
                          <li class="list-group-item"><span style="display: none">VOLYME</span>
                            <img src="{{ asset('55.png') }}" style="width: 200px" >
                            </li>
                          <li class="list-group-item"><span style="display: none">LYFT</span>
                            <img src="{{ asset('77.png') }}" style="width: 200px" >
                            </li>
                        </ul>
                      </div>
                     <div class="row">
                       <div class="col-8 s">
                         <div class="fixed-headers mt-4">
                           <input type="hidden" name="demo22_data" id="demo22_data" value='["LYFT","DEFYNE","LIDOCAINE","VOLYME","KYSSE","REFYNE"]'>
                           <ul class="list-group" id="demo22">
                             <li value="LYFT"> PROJECTION ULTIME<br/>
                              Offre  le maximum de projection et de
                              lifting sans effet volumateur et foumit
                              une forte définition et précisiont</li>
                             <li value="DEFYNE">UN REGARD PLUS LUMINEUX ET UN
                              SOUTIEN AVEC SOUPLESSE <br/>
                              Un gel ferme qui comble essentiellement
                              les creux des cernes, rides moyennes et
                              marquées, offrant un soutien et
                              une souplesse</li>
                             <li value="LIDOCAINE">SOUTIEN AVEC SOUPLESSE <br/>
                              Un gel ferme qui offre une intégration
                              ciblée et un soutien tissulaire pour
                              combler les ridules, les rides marquées,
                              et les cernes</li>
                             <li value="VOLYME">VOLUME ET REMPLISSAGE <br/>
                              Un gel avec forte capacité de remplis-
                              sage grâce à des particules de plus
                              grande taille pour donner du volume avec
                              une projection modérée, compenser la
                              perte de volurne, restaurer les contours
                              naturels et harmoniser les contour</li>
                             <li value="KYSSE">
                              LÈVRES IRRÉSISTIBLES<br/>
                              Un gel souple et flexible pour repulper,
                              corriger l’asymétrie, adoucir et rehausser
                              naturellement les lèvres, leur redonner de
                              la forme et améliorer leur texture
                             </li>
                             <li  value="REFYNE"> REMODELAGE EN SOUPLESSE <br/>
                              Offre une intégration tissulaire douce
                              et un soutien pour adoucir et
                              combler les rides superficielles</li>
                           </ul>
                         </div>
                       </div>
                       <div class="col-4 s">
                         <div class="fixed-headers mt-4">
                           <input type="hidden" name="demo33_data" id="demo33_data">
                           <ul class="list-group" id="demo33">
                           </ul>
                         </div>
                       </div>
                     </div>
                   </div>
               </fieldset>
                <!-- Step 4 -->
          <fieldset id="step4">
            <img src="{{ asset('bysknr.png') }}" alt="Logo" width="340px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 


            <h1 class="question">            <div class="qNumber">Question 4</div>

              Quelles affirmations concernant  RESTYLANE SKINBOSTERS<span>&#8482;</span> ?
            </h1>
            <div class="options">
              <input type="hidden" name="question4" value="4">

               <div class="qst ">
                  <input type="radio"  class="form-check-input" name="answer4" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie NASHA" />
                  <label> Le Restylane Skinboosters<span>&#8482;</span>  est un acide hyaluronique réticulé issu de la technologie NASHA</label>
               </div>
               <div class="qst ">
                  <input type="radio" class="form-check-input" name="answer4" value="Le Restylane Skinboosters est un acide hyaluronique réticulé issu de la technologie OBT." />
                  <label> Le Restylane Skinboosters<span>&#8482;</span>  est un acide hyaluronique réticulé issu de la technologie OBT.</label>
               </div>
               <div class="qst ">
                  <input type="radio" class="form-check-input" name="answer4" value="Le Restylane Skinboosters est un acide hyaluronique Non-réticulé ." />
                  <label> Le Restylane Skinboosters<span>&#8482;</span>  est un acide hyaluronique Non-réticulé</label>
               </div>
            </div>
            <img class="m-5"  src="{{ asset('3.png') }}" alt="" >
          </fieldset>

          <fieldset id="step5">
            <img src="{{ asset('bysknr.png') }}" alt="Logo" width="340px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 


            <h1 class="question">            <div class="qNumber">Question 5</div>

              Quelle est la quantité et la concentration d'acide hyaluronique (AH) contenues dans une seringue de Restylane Skinboosters<span>&#8482;</span>  Vital ?
            </h1>

            <input type="hidden" name="question5" id="question5" value="5">
            <div class="options">
               <div class="qst ">
                  <input type="radio"  class="form-check-input" name="answer5" value="Restylane SkinboostersTM propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 1 ml" />
                  <label>Restylane Skinboosters<span>&#8482;</span> propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 1 ml</label>
               </div>
               <div class="qst ">
                  <input type="radio" class="form-check-input" name="answer5" value="Restylane SkinboostersTM propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 3 ml" />
                  <label> Restylane Skinboosters<span>&#8482;</span> propose une concentration de 20 mg d'acide hyaluronique dans chaque seringue de 3 ml.</label>
               </div>
               <div class="qst ">
                  <input type="radio" class="form-check-input" name="answer5" value="Restylane SkinboostersTM propose une concentration de 6,6 mg d'acide hyaluronique dans chaque seringue de 1 ml" />
                  <label> Restylane Skinboosters<span>&#8482;</span> propose une concentration de 6,6 mg d'acide hyaluronique dans chaque seringue de 1 ml.</label>
               </div>
            </div>
            <img class="m-5"  src="{{ asset('3.png') }}" alt="" >
         </fieldset>
         <fieldset id="step6">
          <img src="{{ asset('logobrnd.png') }}" alt="Logo" width="200px"  style=" margin-bottom:  5.5rem!important ; margin-top: -0.5rem!important "> 

            <!-- Question -->
            <h1 class="question">          <div class="qNumber">Fin du quiz</div>
              Pour valider vos réponses, merci de choisir parmi les produits de la gamme Restylane celui que vous préférez.
            </h1>
            <div class="row">
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name=" []" value="DEFYNE" id="DEFYNE">
                  <label>DEFYNE</label> <br/>
                  <img src="{{ asset('11.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="REFYNE" id="REFYNE">
                  <label>REFYNE</label> <br/>

                  <img src="{{ asset('22.png') }}"  style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="RESTYLNAE SKINBBOSTERS" id="RESTYLNAE">                 
                   <label>RESTYLNAE SKINBBOSTERS</label> <br/>
                  <img src="{{ asset('33.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="KYSSE" id="KYSSE">
                  <label>KYSSE</label> <br/>

                  <img src="{{ asset('44.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="VOLYME" id="VOLYME">
                  <label>VOLYME</label> <br/>
                  <img src="{{ asset('55.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="LIDOCAINE" id="LIDOCAINE">
                  <label>LIDOCAINE</label> <br/>

                  <img src="{{ asset('66.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>
              <div class="col-md-4 my-4">
                <div class="option animate delay-100">
                  <input type="checkbox" name="preferez[]" value="LYFT"  id="LYFT">
                  <label>LYFT</label> <br/>
                  <img src="{{ asset('77.png') }}"   style="width: 200px"  alt="meditation">
                </div>
              </div>

              <label  style="font-size: 30px;
              font-weight: col;
              font-weight: 600;
              color: white;
              padding-top: 20px;
              padding-bottom: 20px;"> Plusieurs choix de produits sont possibles. </label>
            </div>
         </fieldset>

            
       <!-- Step 1 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="next" id="step1btn"  > Valider </button>
       </div>
 
       <!-- Step 2 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step2btn"  >Valider</button>
       </div>
 
       <!-- Step 3 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step3btn">Valider</button>
       </div>
       <!-- Step 4 Next Prev -->
        <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step4btn">Valider</button>

      </div>
       <!-- Step 4 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button" class="next" id="step5btn">Valider</button>

      </div>
      <!-- Step 4 Next Prev -->
       <div class="nextPrev">
         <button type="button" class="prev">
           <i class="fa-solid fa-arrow-left"></i>
         </button>
         <button type="button"  class="next" id="step6btn">Valider</button>
      </div>

        </form>
      </section>
      </main>
      <!-- result -->
      {{-- <div class="loadingresult">
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
         </main> --}}
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
   Sortable.create(demo11, {
      animation: 100,
      group: 'list-1',
      draggable: '.list-group-item',
      handle: '.list-group-item',
      sort: true,
      filter: '.sortable-disabled',
      chosenClass: 'active'
   });


   Sortable.create(demo33, {
      group: 'list-1',
      handle: '.list-group-item'
   });
   </script>

<script>
    
   document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('step3btn').addEventListener('click', function() {
        var mainElement = document.querySelector('main.overflow-hidden');
        var checkbox = document.querySelector('input[type="checkbox"][name="answer[]"]');
        
        var demo33IsEmpty = $("#demo33").children().length === 0;

        // Check if the checkbox is checked
        if (!demo33IsEmpty) {
            mainElement.style.transition = 'background-color 1s ease'; // Transition effect
            mainElement.style.backgroundColor = '#FFAF69'; // Change to your desired color
        }
    });
   });

   document.getElementById('step5btn').addEventListener('click', function() {
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
            var cleanedText = $(this).text().trim().replace(/^\"|\"$/g, "");
            demo2Data.push(cleanedText);
         });
         $("#demo2_data").val(JSON.stringify(demo2Data));
         console.log(demo2Data);

         var demo3Data = []; 
         $("#demo3 li").each(function() {
            var cleanedText = $(this).text().trim().replace(/^\"|\"$/g, "");
            demo3Data.push(cleanedText);
         });
         $("#demo3_data").val(JSON.stringify(demo3Data));
         console.log(demo3Data);

         //demo22
         var demo33Data = []; 
         $("#demo33 li").each(function() {
            var cleanedText = $(this).text().trim().replace(/^\"|\"$/g, "");
            demo3Data.push(cleanedText);
         });
         $("#demo33_data").val(JSON.stringify(demo3Data));
         console.log(demo3Data);
         }
        
         
         document.getElementById("step6btn").addEventListener("click", function(event) {
                      
                      // Prevent the default form submission
                event.preventDefault();

            // Call the function to prepare form data
            prepareFormData();

            // Check if at least one checkbox is checked
            var checkboxes = document.querySelectorAll('input[name="preferez[]"]:checked');
            if (checkboxes.length !== 0) {
                // If no checkbox is checked, alert the user and don't submit the form
                prepareFormData();
                document.getElementById("quizForm").submit();
              }});
    });


    //  const checkboxes = document.querySelectorAll('#step1 input[type="checkbox"]');
    // const maxChecks = 2; 

    // checkboxes.forEach(checkbox => {
    //     checkbox.addEventListener('change', () => {
    //         let checkedCount = document.querySelectorAll('#step1 input[type="checkbox"]:checked').length;
    //         if (checkedCount > maxChecks) {
    //             checkbox.checked = false; // Uncheck the checkbox if the maximum limit is exceeded
    //         }
    //     });
    // });
</script>


   </body>
</html>