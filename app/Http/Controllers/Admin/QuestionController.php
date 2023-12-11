<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('admin.question.index', compact('questions'));
    }

    public function store(Request $request)
    {
        // Validate the submitted interest data
        $validation = Validator::make($request->all(), Question::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422); // 422 is an HTTP Unprocessable Entity status code
        }

        $data = [
            'text' => $request->text,
            'percentage' => $request->percentage,
            'order' => $request->order,
        ];
        $question = Question::create($data);

        return response()->json(['success' => 'Question added Successfully.']);
    }

    public function create()
    {
        return view('admin.question.create');
    }

    public function edit($id)
    {
        $questions = Question::findOrFail($id);
        return view('admin.question.edit', compact('questions'));

    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), Question::$rules);

        if ($validation->fails()) {
            return response()->json(['errors' => $validation->errors()], 422);
        }
        $question = Question::findOrFail($id);
        $question->text = $request->text;
        $question->percentage = $request->percentage;
        $question->order = $request->order;
        $question->save();
        return response()->json(['success' => 'Question Updated SuccessFully.']);
    }

    public function delete($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('question.index');
    }

}
