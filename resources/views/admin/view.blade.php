
 @extends('layout.master1')
@section('content')
<main>
    <div class="container mt-5">
      <h1 class="mb-4">Admin Dashboard</h1>
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>

           
              <th class="bg-warning col-md-8">Quote</th>
               <th class="bg-warning col-md-2">Author</th>
              <th class="bg-warning">Reactions</th>
              <th class="bg-warning">Comments</th>
              <th class="bg-warning">Actions</th>
            </tr>
          </thead>
          <tbody>
                @foreach($quotes as $quote)
                <tr>
                    <td>{{ $quote->content }}</td>
                    <td>{{ $quote->author }}</td>
                   
                    <td>
                       
                            &#x2764; <!-- Heart symbol -->
                            <span class="ml-1">{{ $quote->likes }}</span> <!-- Display the like count -->
                        
                    </td>
                   <td>
    @if ($quote->comments)
        @if ($quote->comments==null)
            No comments
        @else
            <ul>
                    <li>{{ $quote->comments }}</li>
             
            </ul>
        @endif
    @else
        No comments
    @endif
</td>

                    <td>
                      <div class="btn-group">
                         <form method="POST" action="{{ route('quotes.destroy', $quote->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Delete</button>
        </form>
      <form method="GET" action="{{ route('quotes.edit', ['id' => $quote->id]) }}">
    @csrf
                        <button class="btn btn-warning">Update</button>
</form>
</div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
     <script src="{{ asset('js/script.js') }}"></script>
    
</main>
@endsection