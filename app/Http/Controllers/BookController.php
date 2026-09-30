<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\requests\UpdateBookRequest;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return Book::with(["author", "category"])
         ->latest()
         ->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create($request->validated());
            return response()->json($book, 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return $book->load(["author", "category"]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        // for updating data we need the following code
        $book->update($request->validated());
        return response() ->json($book, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->noContent();
    }
}
