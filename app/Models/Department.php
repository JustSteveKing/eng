<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;
    use HasUlids;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'description',
        'team_id',
        'user_id',
    ];

    /** @return BelongsTo<Team> */
    public function team(): BelongsTo
    {
        return $this->belongsTo(
            related: Team::class,
            foreignKey: 'team_id',
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

    /** @return HasMany<Employee> */
    public function employees(): HasMany
    {
        return $this->hasMany(
            related: Employee::class,
            foreignKey: 'department_id',
        );
    }
}
