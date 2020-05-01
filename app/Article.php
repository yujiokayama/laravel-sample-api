<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * タイトルでフィルタ
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string|null $title
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeTitleFilter($query, ?string $title)
    {
        if (!is_null($title)) {
            return $query->where('title', $title);
        }
        return $query;
    }
}
