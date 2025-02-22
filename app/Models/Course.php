<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['cu_code', 'quarter', 'name', 'credits', 'passed_at'];

    /**
     * Get the tests associated with the course.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    /**
     * Calculate the grade for the course.
     *
     * @return float The calculated grade.
     */
    public function calculateGrade()
    {
        $totalWeight = 0;
        $weightedSum = 0;

        foreach ($this->tests as $test) {
            if ($test->best_grade !== null
                && $test->best_grade >= $test->lowest_passing_grade) {
                $weightedSum += $test->best_grade * $test->weighing_factor;
                $totalWeight += $test->weighing_factor;
            }
        }

        return $totalWeight > 0 ? $weightedSum / $totalWeight : null;
    }

    public function calculateCredits()
    {
        foreach ($this->tests as $test) {
            if ($test->best_grade == null
                || $test->best_grade < $test->lowest_passing_grade) {
                    return 0;
            }
        }
        return $this->credits;
    }
}
