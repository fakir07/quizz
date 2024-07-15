<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\Questions;
use App\Models\Quizze;
use Illuminate\Http\Request;

class QuizzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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


    //     // Retrieve answers for each question based on the provided question IDs
        $response_question1 = Answers::where('question_id', $request->question1)->pluck('answer_text_user')->toArray();
        // dd($response_question1);
        $response_question2 = Answers::where('question_id', $request->question2)->first();
        $response_question3 = Answers::where('question_id', $request->question3)->first();

    $score = 0;
    // // $total_possible_score = 3;


    if ($request->answer) {
        foreach( $request->answer as $item){
            if (in_array($item, $response_question1)) {
                $score += 0.5;            
            }
        }
    }



    if ($request->answer2 === $response_question2->answer_text_user) {
        $score++;
    }

    // dd($request->answer3 , $response_question3->answer_text_user);

    if ($request->answer3 === $response_question3->answer_text_user) {
        $score++;
    }

    // old code is work 


    $response_question4_nasha = Answers::where('question_id', $request->question4)->where('category', 'NASHA')
                                                                            ->pluck('answer_text_user')
                                                                            ->toArray();
    $response_question4_obt = Answers::where('question_id', $request->question4)->where('category', 'OBT')
                                                                            ->pluck('answer_text_user')
                                                                            ->toArray();

            $response_question4_nasha = json_decode($response_question4_nasha[0], true);
            $response_question4_obt = json_decode($response_question4_obt[0], true);
          
            $NASHA = json_decode($request->input('demo2_data'));
            $OBT = json_decode($request->input('demo3_data'));
            //  dd($NASHA , $OBT);

            $totalScore = 0;
            $totalPossibleScore = 6;
            foreach ($NASHA as $item) {
                if (in_array($item, $response_question4_nasha)) {
                    $totalScore++;
                }
            }
            
            foreach ($OBT as $item) {
                if (in_array($item, $response_question4_obt)) {
                    $totalScore++;
                }
            }
            

            $scoredrag= $totalScore / $totalPossibleScore;

            dd($scoredrag+$score);




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
