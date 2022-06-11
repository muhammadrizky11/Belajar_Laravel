<?php

namespace App\Models;

use App\Models\post as ModelsPost;
use App\Models\Post as AppModelsPost;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Array_;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class Post extends Model
{
    use HasFactory;
    //cara mudah buat baru data post
    // protected $fillable = ['title', 'excerpt', 'body'];
    //cara supata tidak menbahi satu satu
    protected $guarded = ['id',];
    protected $with = ['autor', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['cari']) ? $filters['cari'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['cari'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['cari'] . '%');
        // }

        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('title', 'like', '%' . $cari . '%')
                ->orWhere('body', 'like', '%' . $cari . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query)  use ($category) {
                $query->where('slug', $category);
            });
        });
        // cara fersi callback
        // $query->when($filters['autor'] ?? false, function ($query, $autor) {
        //     return $query->whereHas('autor', function ($query)  use ($autor) {
        //         $query->where('username', $autor);
        //     });
        // });

        // cara fersi arrowfunction
        $query->when($filters['autor'] ?? false, fn ($query, $autor) =>
        $query->whereHas(
            'autor',
            fn ($query) =>
            $query->where('username', $autor)
        ));
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function autor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
