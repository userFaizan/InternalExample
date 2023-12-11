<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class QuestionOption extends Model
{
    use HasFactory;
    protected $table= 'question_options';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $fillable = [
        'question_id',
        'option_values',
        'is_correct'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'question_id' => 'integer',
        'option_values' => 'string',
        'is_correct' => 'boolean',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'question_id' => 'required',
        'option_values' => 'required|string|max:255',
        'is_correct' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
