<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\BelongsToRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo as RelationsBelongsTo;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'description',
        'user_id',
    ];

    // public function user(): BelongsTo {
    public function user(): RelationsBelongsTo {
        return $this->belongsTo(
            related: User::class,
            foreignKey: 'user_id',
        );
    }

}
