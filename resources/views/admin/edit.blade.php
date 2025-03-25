@extends('layout.master1')
@section('content')
    <main>
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header bg-warning">
                Admin Quote Authentication
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-4">
                  <p id="quoteText">
                    "Admin ID is the key to unlocking opportunities."
                  </p>
                  <footer class="blockquote-footer">- Admin Wisdom</footer>
                </blockquote>
           <form method="POST" action="{{ route('quotes.update', ['id' => $quote->id]) }}">
                @csrf
                @method('PUT')
                  <div class="mb-3">
                    <label for="content" class="form-label">Quote</label>
                    <textarea name="content" id="content" class="form-control">{{ $quote->content }}</textarea>
                   
                  </div>
                  <div class="mb-3">
                    <label for="author" class="form-label"
                      >Author</label
                    >
                    <input type="text" name="author" value="{{ $quote->author }}" class="form-control" id="author">
    
                  </div>
                 
   <button type="submit" class="btn btn-warning">Update</button>
   
</form>

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    @endsection
   
