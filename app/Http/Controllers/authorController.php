<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::with('books')
            ->latest()
            ->paginate(15);
    }

    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->validated());
        return response()->json($author, 201);
    }

    public function show(Author $author)
    {
        return $author;
    }

    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return response()->json($author, 200);
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return response()->noContent();
    }
}