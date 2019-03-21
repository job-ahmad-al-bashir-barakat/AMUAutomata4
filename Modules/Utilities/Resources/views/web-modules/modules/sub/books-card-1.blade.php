@foreach($books as $book)
    @include('utilities::web-modules.modules.sub.book-card-1', ['book' => $book])
@endforeach