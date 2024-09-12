<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'blog_posts';
    protected $fillable = ['slug' , 'title' , 'author' , 'body'];

    protected $with = ['author' , 'category'];

    public function scopeFilter(Builder $query , array $filters) : void {
    //     cara 1 operator ternary
    //     if(isset($filters['search']) ? $filters['search'] : false){

    //         $query->where('title' , 'like' , '%'. request('search') . '%');
    //     } 
    //     cara 2 null  coalising operator
        $query->when(
            $filters['search'] ?? false, 
            fn ($query , $search) =>
            $query->where('title' , 'like' , '%'. $search . '%')
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query , $category) =>
            $query->whereHas('category' , fn($query) => $query->where('slug' , $category))
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query , $author) =>
            $query->whereHas('author' , fn($query) => $query->where('username' , $author))
        );
    }


    public function author(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo{

        return $this->belongsTo(Category::class);

    }

}
