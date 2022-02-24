<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Books as BookModel;
use App\Models\Categories as CategoryModel;
use App\Models\Details as DetailModel;


class PageController extends Controller
{

    public function show(){
        return view('layouts.master');
    }

    public function book(){

    }
    public function viewBookList(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.books', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    } 

    public function viewFictionBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.fictionbooks', ['book'=>$books, 'category'=>$category = 'Fiction', 'detail'=>$bookdetails]);
    } 

    public function viewNonFictionBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.nonfictionbooks', ['book'=>$books, 'category'=>$category = 'Non-Fiction', 'detail'=>$bookdetails]);
    } 

    public function viewLanguageBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.languagebooks', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    } 

    public function viewChildrenBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.childrenbooks', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    }

    public function viewScienceBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.sciencebooks', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    } 

    
    public function viewComputerBook(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.computerbook', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    } 

    public function viewComics(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        $category = CategoryModel::all();
        return view('layouts.comics', ['book'=>$books, 'category'=>$category, 'detail'=>$bookdetails]);
    } 

    public function contactPerson(){
        return view('layouts.contact');
    }

    public function viewBookDetail(){
        $books = BookModel::all();
        $bookdetails = DetailModel::all();
        return view('layouts.bookdetails', ['book'=>$books, 'detail'=>$bookdetails]);
    }
}
