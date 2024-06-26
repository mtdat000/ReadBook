<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('books.index', ['books'=> Book::all()->sortByDesc('created_at')]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'author'=> 'required',
            'year_published' => 'required',
            'cover' => 'image|max:5120'
        ]);

        $formFields['synopsis'] = $request->input('synopsis');

        if($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
        }

        Book::create($formFields);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('books.show', ['book'=> $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', ['book'=> $book]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'author'=> 'required',
            'year_published' => 'required',
            'cover' => 'image|max:5120'
        ]);

        $formFields['synopsis'] = $request->input('synopsis');

        if($request->hasFile('cover')) {
            if($book->cover && Storage::disk('public')->exists($book->cover)) {
                Storage::disk('public')->delete($book->cover);
            }
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
        }
        
        $book->update($formFields);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        if(Auth::check()) {
            if($book->cover && Storage::disk('public')->exists($book->cover)) {
                Storage::disk('public')->delete($book->cover);
            }

            $book->delete();
    
            return redirect('/')->with('message', 'Book deleted');
        }

        abort(403, 'Unauthorized Action');
    }

    // Show reviews
    public function review(Book $book)
    {
        $reviews = Review::with('user:id,name')->where('book_id', $book->id)->get()->sortByDesc('created_at');
        
        return view('books.review', ['book'=> $book, 'reviews'=> $reviews]);
    }
}
