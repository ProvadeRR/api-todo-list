<?php

namespace App\Models\Todo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Todo
 * @package App\Models\Todo
 * @property string $title,
 * @property string $descrtiption
 * @property string $date_now
 * @property string $date_end
 * @property string $status
 *
 */

class Todo extends Model
{
    use HasFactory;

    public $timestamps = false;

    const API_STATUSES = [
        'new' => 'NEW',
        'completed' => 'COMPLETED',
    ];

    const API_FIELS = [
        'title',
        'description',
        'date_now',
        'date_end',
        'status',
    ];

    protected $fillable = [
        'title',
        'description',
        'date_now',
        'date_end',
        'status',
    ];

    protected $table = 'todos';



}
