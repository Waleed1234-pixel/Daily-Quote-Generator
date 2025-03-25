@extends('layout.master1')
@section('content')
    <main>
    
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header bg-warning">Admin-Dashboard</div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p id="quoteText">
                   "Admin ID is the key to unlocking opportunities."
                  </p>
                  <footer class="blockquote-footer">
                  Admin
                   
                  </footer>
                </blockquote>
              </div>
              <div class="card-footer">
                  <a href="{{ route('addquotes') }}" target="_blank">
                <button id="addQuoteBtn" class="btn btn-warning">
                  Add Quote
                </button>

</a>

                <a href="{{ route('viewquotes') }}" target="_blank">
                  <button id="viewQuotesBtn" class="btn btn-warning">
                    View Quotes
                  </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

        @if(session('success'))
        <div class="container mt-4">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div id="flash-message" class="alert alert-success text-center bg-warning">
                {{ session('success') }}
            </div>
        </div>
    </div>
</div>

@endif
    </main>
    @endsection
