<?php

namespace ItDelmax\FilamentTreeView\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ItDelmax\FilamentTreeView\Tests\Factories\CategoryFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'parent_id',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function newFactory(): CategoryFactory
    {
        return CategoryFactory::new();
    }
}
