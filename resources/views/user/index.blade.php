@extends('layout.master')
@section('content')
<main>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header bg-warning">Quotes</div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p id="quoteText">
                                    {{ $quote->content }}
                                </p>
                                <footer class="blockquote-footer">
                                    {{ $quote->author }}
                                </footer>
                            </blockquote>
                    <form method="POST" action="{{ route('quotes.like', $quote->id) }}">
    @csrf
                            <button class="btn btn-link like-button">
                                &#x2764;
                                <span class="ml-1">{{ $quote->likes }}</span>
                            </button>
</form>
                            <form method="GET" action="{{ route('home') }}">
                         @csrf
                            <button id="changeQuoteBtn" class="btn btn-warning mt-3">
                                Change Quote
                            </button>
</form>
                            <div class="comment-section">
                                <h2>Comments:</h2>
                                       <form method="POST" action="{{ route('quotes.comment', $quote->id) }}">
    @csrf
                                    
                                    <textarea
                                        class="comment-box container-fluid"
                                        placeholder="Leave a comment"
                                        name="commentText"
                                    ></textarea>
                                   
                                    <button
                                        type="submit"
                                        class="comment-button container-fluid btn btn-warning mt-3"
                                       
                                    >
                                        Submit Comment
                                    </button>
                                </form>
                                <div class="comment-alert alert alert-success d-none">
                                    Comment added successfully!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection