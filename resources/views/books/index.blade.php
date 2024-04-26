<x-header>
    <div class="lg:grid lg:grid-cols-6 gap-2 space-y-4 md:space-y-0 mx-4">
        @foreach ($books as $book)
            <div class="p-6 flex-wrap">
                <a href="/book/{{$book->id}}">
                    <img class="h-52"
                        src="{{$book->cover ? asset('storage/'.$book->cover) : asset('No_Cover.jpg')}}" alt=""/> 
                    <h3 class="text-xl font-bold">
                        {{$book->title}}
                    </h3>
                </a>
                <div class="text-md  mb-4">{{$book->author}}</div>
            </div>
        @endforeach
    </div>
</x-header>