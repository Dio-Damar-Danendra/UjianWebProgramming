<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $guarded= [];

    public function category(){
        return $this->hasMany(Categories::class);
    }

    public function fiction(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/fiction.blade.php')->with('Categories', $bookcategory);
    }

    public function nonFiction(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/nonfiction.blade.php')->with('Categories', $bookcategory);
    }

    public function language(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/language.blade.php')->with('Categories', $bookcategory);
    }

    public function children(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/childrenbooks.blade.php')->with('Categories', $bookcategory);
    }

    public function science(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/science.blade.php')->with('Categories', $bookcategory);
    }

    public function computer(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/computer.blade.php')->with('Categories', $bookcategory);
    }

    public function comics(){
        $bookcategory = BookModel::with('categories')->lists('categories.id', 'id');
        return View::make('views/layouts/comics.blade.php')->with('Categories', $bookcategory);
    }
}
