@extends('layout.master1')
@section('content')
  
   
    <main>
        @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
      
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header bg-warning">
                Add Quotes
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-4">
                  <p id="quoteText">
                    "Admin ID is the key to unlocking opportunities."
                  </p>
                  <footer class="blockquote-footer">- Admin Wisdom</footer>
                </blockquote>
                <form method="POST" action="{{ route('addquotes') }}">
    @csrf
                  <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <input
                      type="text"
                      class="form-control"
                      id="content"
                      name="content"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="author" class="form-label"
                      >Author</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="author"
                      name="author"
                      required
                    />
                  </div>
                 
   
   <button type="submit" class="btn btn-warning">Add-Quote</button>
</form>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    @endsection
