<x-header>
    <div class="mx-4">
        <div class="flex p-6 grid grid-cols-3 gap-5">
            <div class="">
                <img class="w-96"
                    src="/67d556f5-91d4-4b85-b287-2f74f008e564.jpg" alt=""/> 
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
    </div>
</x-header>