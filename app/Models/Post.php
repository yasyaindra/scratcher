<?php

namespace App\Models;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable = ['title','body','excerpt'];
    protected $guarded = ['id'];
    protected $with = ['category','user'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', "%".$search."%")
                ->orWhere('body', 'like', '%'.$search.'%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category) {
                return $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user){
            $query->whereHas('user', function($query) use ($user) {
                return $query->where('username', $user);
            });
        });

        // if(isset($filters['search']) ? $filters['search'] : false){
        //     return $query->where('title', 'like', "%".$filters['search']."%")
        //         ->orWhere('body', 'like', '%'.$filters['search'].'%');
        // }
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
