<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionOptionController extends Controller
{
    public function index()
    {
        $questionOptions = QuestionOption::with('questions')->get();
        return view('admin.question-option.index', compact('questionOptions'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), QuestionOption::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422); // 422 is an HTTP Unprocessable Entity status code
        }

        $data = [
            'question_id' => $request->question_id,
            'option_values' => $request->option_values,
            'is_correct' => $request->is_correct,
        ];
        QuestionOption::create($data);

        return response()->json(['success' => 'Question Options added Successfully.']);
    }

    public function create()
    {
        $questions = Question::all();
        return view('admin.question-option.create', compact('questions'));
    }

    public function edit($id)
    {
        $questionOptions = QuestionOption::findOrFail($id);
        $questions = Question::all();
        return view('admin.question-option.edit', compact('questionOptions','questions'));

    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), QuestionOption::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }
        $question = QuestionOption::findOrFail($id);
        $question->question_id = $request->question_id;
        $question->option_values = $request->option_values;
        $question->is_correct = $request->is_correct;
        $question->save();
        return response()->json(['success' => 'Question Options Updated SuccessFully.']);
    }

    public function delete($id)
    {
        $question = QuestionOption::findOrFail($id);
        $question->delete();
        return redirect()->route('questionoption.index');
    }
}
