<x-header>
    <div class="max-w-lg border border-gray-300 rounded mx-auto my-8 p-5">
        <header>
            <h2 class="text-2xl font-bold mb-6">Edit book</h2>
        </header>

        <form action="/book/{{$book->id}}/edit" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="inline-block mb-2" for="title">Title</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="text" name="title" value="{{$book->title}}">

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="author">Author</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="text" name="author" value="{{$book->author}}">

                @error('author')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2 w-full" for="year_published">Year published</label>
                <input class="border border-gray-300 rounded p-2" type="number" min="1901" max="2100" step="1" name="year_published" value="{{$book->year_published}}">
                
                @error('year_published')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="synopsis">Synopsis</label>
                <textarea class="border border-gray-300 rounded p-2 w-full" name="synopsis" rows="6">{{$book->synopsis}}</textarea>
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="cover">Cover</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="file" name="cover">

                @error('cover')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="bg-sky-500 rounded font-bold text-white p-2">Submit</button>
            <a class="bg-red-500 rounded font-bold text-white p-2" href="/book/{{$book->id}}">Back</a>
        </form>
    </div>
</x-header>