<?php

namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
            return view('admin.index');
        }
        elseif(Auth::user()->hasRole('user')){

            $questions= Question::with('options')->orderBy('order', 'asc')->get();
            $groupedQuestions = $questions->chunk(2); // Group questions into pairs
            return view('user.index', compact('groupedQuestions'));
        }
    }


    public function submitForm(Request $request)
    {
        // Assuming $request->input() contains the submitted data

        $totalQuestions = 0;
        $totalPercentage = 0;

        foreach ($request->input() as $questionId => $selectedOptionId) {
            // Assuming your Question and Option models have relationships
            $question = Question::find($questionId);



            // Check if the selected option is correct
            $selectedOption = QuestionOption::find($selectedOptionId);
            if ($selectedOption && $selectedOption->is_correct) {
                // Increment the totalQuestions counter
                $totalQuestions++;

                // Add the percentage value to the totalPercentage
                $totalPercentage += $question->percentage;
            }
        }

        // Calculate the percentage (percentage of correct answers)
        $percentage = ($totalQuestions > 0) ? ($totalPercentage / $totalQuestions) : 0;

        // Do something with the totalPercentage, percentage, and totalQuestions,
        // for example, store them in the database or return them in the response

        return response()->json(['percentage' => $percentage, 'totalPercentage' => $totalPercentage]);
    }
}
