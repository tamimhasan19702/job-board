<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Job
{
    public static function all(): array{
        return [
            ['id' => 1, 'title' => 'DevOps Engineer', 'salary' => 150000],
            ['id' => 2, 'title' => 'Software Engineer', 'salary' => 120000],
            ['id' => 3, 'title' => 'Data Scientist', 'salary' => 200000],
            ['id' => 4, 'title' => 'Quality Assurance Engineer', 'salary' => 100000],
            ['id' => 5, 'title' => 'Cybersecurity Engineer', 'salary' => 180000],
        ];
    }
}
