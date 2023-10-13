<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller{

    public function index()
    {
        $data = Book::all();

        return response()->json($data);
    }

    public function save(Request $res)
    {
        $data =  new Book;
        $data->title = $res->title;
        $data->image = $res->image;

        $data->save();

        return response()->json($res);
    }

}