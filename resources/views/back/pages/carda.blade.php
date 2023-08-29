<div id="card-container">
    <!-- Display your paginated cards -->
    <ul>
        @foreach ($cards as $card)
            <li>{{ $card->title }} - {{ $card->content }}</li>
        @endforeach
    </ul>

    <!-- Show All Button -->
    <button id="show-all-btn">Show All Cards</button>
</div>

<!-- Pagination Links -->
{{ $cards->links() }}
