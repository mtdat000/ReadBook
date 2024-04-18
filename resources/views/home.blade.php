<x-header>
    <div class="lg:grid lg:grid-cols-6 gap-2 space-y-4 md:space-y-0 mx-4">
        @foreach ($books as $book)
            <div class="p-6 flex-wrap">
                <img class="h-52"
                    src="67d556f5-91d4-4b85-b287-2f74f008e564.jpg" alt=""/> 
                <h3 class="text-xl font-bold">
                    <a href="/book/{{$book->id}}">{{$book->title}}</a>
                </h3>
                <div class="text-md  mb-4">{{$book->author}}</div>
            </div>
        @endforeach
    </div>
</x-header>