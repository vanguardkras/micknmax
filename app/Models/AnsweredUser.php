<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\AnsweredUser
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Answer[] $answers
 * @property-read int|null $answers_count
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnsweredUser whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Test[] $tests
 * @property-read int|null $tests_count
 */
class AnsweredUser extends Model
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    use HasFactory;

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function tests(): BelongsToMany
    {
        return $this->belongsToMany(Test::class)->withTimestamps();
    }
}
