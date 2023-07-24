<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        if ($filters['tag'] ?? 'false') {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? 'false') {
            $search = '%' . request('search') . '%';
            $query
                ->where('title', 'like', $search)
                ->orWhere('description', 'like', $search)
                ->orWhere('tags', 'like', $search);
        }
    }
}
