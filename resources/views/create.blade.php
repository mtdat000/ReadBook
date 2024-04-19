<x-header>
    <div class="max-w-lg border border-gray-300 rounded mx-auto my-8 p-5">
        <header>
            <h2 class="text-2xl font-bold mb-6">Upload book</h2>
        </header>

        <form action="/book/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-5">
                <label class="inline-block mb-2" for="title">Title</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="text" name="title">
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="author">Author</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="text" name="author">
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2 w-full" for="year_published">Year published</label>
                <input class="border border-gray-300 rounded p-2" type="number" min="1901" max="2100" step="1" name="year_published">
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="synopsis">Synopsis</label>
                <textarea class="border border-gray-300 rounded p-2 w-full" name="synopsis" rows="6"></textarea>
            </div>

            <div class="mb-5">
                <label class="inline-block mb-2" for="cover">Cover</label>
                <input class="border border-gray-300 rounded p-2 w-full" type="file" name="cover">
            </div>

            <button type="submit" class="bg-sky-500 rounded font-bold text-white p-2">Submit</button>
        </form>
    </div>
</x-header>