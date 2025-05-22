<div id="results" class="pt-2">

    @if ($books->isEmpty())
        <p>No results found</p>
    @else
        <ul>
            @foreach ($books as $book)
                <li>
                    <strong>{{ $book->title }}</strong> by {{ $book->author }} and  {{ $loop->index }}

                </li>
            @endforeach
        </ul>
    @endif

</div>



<div class="container-fluid">
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">

        <div class="ratio ratio-4x3">

            <img
         src="data:image/jpeg;base64,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"
          alt="" class="card-img-top">
</div>
        
      <div class="card-body">
        <h5 class="card-title">To Kill a Mockingbird</h5>
        <p class="card-text">Harper Lee</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
        

        
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

   <div class="col-sm-6 pt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>



   <div class="col-sm-6 pt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>


   <div class="col-sm-6 pt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>


   <div class="col-sm-6 pt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>


   <div class="col-sm-6 pt-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>



</div>


    
</div>
