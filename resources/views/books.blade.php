@foreach($books as $book)
<h1> {{$book->name}} </h1>
<p> {{$book->desc}} </p>
<img src={{$book->image}}>
@endforeach
