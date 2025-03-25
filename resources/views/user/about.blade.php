@extends('layout.master')
@section('content')
 
    <main>
      <div class="container mt-4">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-header bg-warning">About-us</div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <pre id="quoteText">
                  The Daily Positive Quote website with a Laravel backend is a project designed to deliver daily
                  doses of positivity and inspiration to users. Through a web interface, users can access a new
                  uplifting quote each day. This project combines HTML, CSS, JavaScript, and the Laravel
                  framework to create a user-friendly platform. 
                  </pre>
                  <footer class="blockquote-footer">
                    Daily-Positive-Quote-Generator
                  </footer>
                </blockquote>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </main>
  
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
@endsection
