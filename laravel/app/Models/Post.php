<?php

namespace App\Models;

use App\Models\post as ModelsPost;
use App\Models\Post as AppModelsPost;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //cara mudah buat baru data post
    // protected $fillable = ['title', 'excerpt', 'body'];
    //cara supata tidak menbahi satu satu
    protected $guarded = ['id',];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
