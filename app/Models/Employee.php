<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    use HasFactory;
    use HasUlids;

    /** @var array<int,string> */
    protected $fillable = [
        'current_salary',
        'department_id',
        'user_id',
    ];

    /** @return BelongsTo<Department> */
    public function department(): BelongsTo
    {
        return $this->belongsTo(
            related: Department::class,
            foreignKey: 'department_id',
        );
    }

    /** @return BelongsTo<User> */
    public function user(): BelongsTo
    {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

    /** @return array<string,string> */
    protected function casts(): array
    {
        return [
            'current_salary' => 'integer',
        ];
    }
}
