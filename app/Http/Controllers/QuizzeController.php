<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\QuizScore;
use App\Models\Quizze;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class QuizzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function presntation()
    {
                 return view('presntation');

    }
    public function index()
    {
                 return view('welcome');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                 return view('quizze');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // dd($request);
                    // dd(json_decode($request->demo22_data));

                /// début question 1
                $response_question1 = Answers::where('question_id', $request->question1)->pluck('answer_text_user')->toArray();
                
                $score = 0;

            //   dd($request->answer,str_replace("\n", "", $response_question1));

                    if ($request->answer) {
                        foreach( $request->answer as $item){

                            $cleaned_response = array_map('trim', $response_question1);
                            if (in_array($item, $cleaned_response)) {
                                $score += 0.5;
                            }
                        }
                    }
                    // dd($score);

            // end question 1          


            // début question 2

                    $response_question4_nasha = Answers::where('question_id', $request->question2)->where('category', 'NASHA')
                                                                                            ->pluck('answer_text_user')
                                                                                            ->toArray();
                    $response_question4_obt = Answers::where('question_id', $request->question2)->where('category', 'OBT')
                                                                                            ->pluck('answer_text_user')
                                                                                            ->toArray();

                            $response_question4_nasha = json_decode($response_question4_nasha[0], true);
                            $response_question4_obt = json_decode($response_question4_obt[0], true);
                        
                            $NASHA = json_decode($request->input('demo2_data'));
                            $OBT = json_decode($request->input('demo3_data'));

                            //  dd($NASHA ,$response_question4_nasha, $OBT,$response_question4_obt);

                            $totalScore2 = 0;
                            $totalPossibleScore2 = 6;
                            foreach ($NASHA as $item) {
                                if (in_array($item, $response_question4_nasha)) {
                                    $totalScore2++;
                                }
                            }
                            
                            foreach ($OBT as $item) {
                                if (in_array($item, $response_question4_obt)) {
                                    $totalScore2++;
                                }
                            }
                            

                            $scoredrag2= $totalScore2 / $totalPossibleScore2;
                            // dd($scoredrag2);
                            $score= $score+$scoredrag2;


                            

                // end question 2

               // début question 3

                $demo22_data = json_decode($request->demo22_data);
                $demo33_data = json_decode($request->demo33_data);
                $totalScore3 = 0;
                $totalPossibleScore3 = 6;
                // dd($demo22_data,$demo33_data);
                foreach ($demo22_data as $key => $value) {
                    // Check if the index exists in both arrays
                    if (array_key_exists($key, $demo22_data) && array_key_exists($key, $demo33_data)) {
                        // Check if the elements at the same index are equal
                        if ($demo22_data[$key] === $demo33_data[$key]) {
                            // Increment the counter if they are equal
                            $totalScore3++;
                        }
                    }
                }
                // dd($totalScore3);

                $scoredrag3= $totalScore3 / $totalPossibleScore3;

                // dd("test",$scoredrag3);

                $score= $score+$scoredrag3;




                

                // end  question 3


                // début question 4 
                    $response_question4 = Answers::where('question_id', $request->question4)->first();
                    if ($request->answer4 === $response_question4->answer_text_user) {
                                    $score +=1;  
                                }
                // end question 4 
                // dd($score);


            // début question 5 
            $response_question5 = Answers::where('question_id', $request->question5)->first();
            if ($request->answer5 === $response_question5->answer_text_user) {
                            $score +=1;  
                        }

            // end question 5 

            // dd($score);
            // $result_final = ($score / 5) * 100;

            // If the result has no decimal places, convert it to an integer
            // $result_final_int = $result_final == intval($result_final) ? intval($result_final) : number_format($result_final, 2);
            
            // dd(;

            // dd($request->user_id ,$score);

            $result_final_int=$score;



            // dd($request->preferez);
            
            $score = new QuizScore();
            $score->user_id = $request->user_id;
            $score->score =  number_format($result_final_int, 2);
            $score->produit_prefere = json_encode($request->preferez);
            $score->save();

            $user =Users::where('id',$request->user_id)->first();

            return view('user_score', compact('score','user'));
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quizze  $quizze
     * @return \Illuminate\Http\Response
     */
    public function show(Quizze $quizze)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quizze  $quizze
     * @return \Illuminate\Http\Response
     */
    public function edit(Quizze $quizze)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quizze  $quizze
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quizze $quizze)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quizze  $quizze
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quizze $quizze)
    {
        //
    }
}
