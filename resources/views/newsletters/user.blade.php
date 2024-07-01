@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Newsletters</h1>
    <div id="newsletter-container">
        @foreach($newsletters as $newsletter)
            <div class="newsletter">
                <h2>{{ $newsletter->title }}</h2>
                <p>{{ $newsletter->content }}</p>
            </div>
        @endforeach
    </div>
</div>

<script>
    setInterval(function() {
        fetch('/api/newsletters')
            .then(response => response.json())
            .then(data => {
                let container = document.getElementById('newsletter-container');
                container.innerHTML = '';
                data.forEach(newsletter => {
                    let div = document.createElement('div');
                    div.className = 'newsletter';
                    div.innerHTML = `<h2>${newsletter.title}</h2><p>${newsletter.content}</p>`;
                    container.appendChild(div);
                });
            });
    }, 5000);
</script>
@endsection
