<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            
        
        <div class="card" style="width: 18rem;">
            <img src="{{$post->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$post->name}}</h5>
              <p class="card-text">{{$post->content}}</p>
              <a href="{{ route('article',$post->slug)}}" class="btn btn-primary">Leer mas</a>
            </div>
          </div>

          @endforeach
    </div>
</div>
