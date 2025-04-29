<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentMaterial;
use App\Models\Material;

class Grade extends Controller
{
    public function submitQuiz(Request $request, Material $material)
    {
        $studentId = $request->cookie('studentName');
        $correctAnswers = $request->correct_answers;
        $totalQuestions = $material->questions()->count();

        $grade = ($correctAnswers / $totalQuestions) * 100;

        StudentMaterial::updateOrCreate(
            ['student_id' => $studentId, 'material_id' => $material->id],
            [
                'correct_count' => $correctAnswers,
                'total_questions' => $totalQuestions,
                'grade' => $grade
            ]
        );

        return redirect()->route('quiz.result', [$material])->with('success', 'Quiz submitted!');
    }
}
