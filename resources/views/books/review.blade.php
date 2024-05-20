<x-header>
    <div class="max-w-2xl border border-gray-300 rounded mx-auto my-8 p-5">
        <header class="flex justify-center">
            <h1 class="text-2xl">
                Reviews for book
            </h1>
        </header>

        @auth
        <form action="/book/{{$book->id}}/review" method="post">
            @csrf
            <div class="mb-5">
                <p class="block mb-2">Rating</p>
                <input type="radio" name="rating" id="rating1" value="1">
                <label  for="rating1">1</label>
                <input type="radio" name="rating" id="rating2" value="2">
                <label  for="rating2">2</label>
                <input type="radio" name="rating" id="rating3" value="3">
                <label  for="rating3">3</label>
                <input type="radio" name="rating" id="rating4" value="4">
                <label  for="rating4">4</label>
                <input type="radio" name="rating" id="rating5" value="5">
                <label  for="rating5">5</label>
            </div>
            <div class="mb-5">
                <label class="block mb-2" for="comment">Comment</label>
                <textarea class="border border-gray-300 rounded p-2 w-full" name="comment" rows="3">{{old('comment')}}</textarea>
            </div>
            <button type="submit" class="bg-sky-500 rounded font-bold text-white p-2">Submit</button>
        </form>

        @else
            <div class="p-2">Log in to post review.</div>
        @endauth

        <br>

        <div>
            {{-- Show reviews --}}
            @foreach ($reviews as $review)    
                <div class="border border-gray-300 rounded mt-3 px-5 py-3">
                    <div class="font-bold">{{$review->user->name}}</div>
                    <div>{{$review->rating}}</div>
                    <div>{{$review->comment}}</div>
                </div>
            @endforeach
        </div>
    </div>
</x-header>