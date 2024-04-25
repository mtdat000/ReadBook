<x-header>
    <div class="m-5">
        <div class="flex p-6 grid grid-cols-3 gap-5">
            <div>
                <img class="w-96"
                    src="{{$book->cover ? asset('storage/'.$book->cover) : asset('67d556f5-91d4-4b85-b287-2f74f008e564.jpg')}}" alt=""/>
            </div>
            <div class="col-span-2">
                <h3 class="text-2xl  font-bold">
                    <a href="">{{$book->title}}</a>
                </h3>
                <div class="text-xl">{{$book->author}}</div>
                <div class="text-sm">{{$book->year_published}}</div>
                <div>{{$book->rating}}</div>
                <div class="text-lg">{{$book->synopsis}}</div>
            </div>
        </div>
        @auth    
            <a class="border border-slate-500 rounded ml-5 p-2" href="/book/{{$book->id}}/edit">Edit</a>
        @endauth
    </div>
</x-header>