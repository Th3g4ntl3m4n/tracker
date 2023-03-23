<livewire:nav-template>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>{{$post->name}}</h1>
            <img src="{{$post->image}}" alt="IMG" style="max-width:100%">           
        </div>
        <div class="col-6">
            <p><br></p>
            <p><br></p>
            <p>{{$post->content}}</p>
        </div>
    </div>
</div>

<p><br></p>
<livewire:latest-post>

<livewire:nav-footer>