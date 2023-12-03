
    <x-app-layout>
    <x-slot name="header">
        <h2 class="text-4xl font-bold">
            {{ __('Dashboard') }}
        </h2>
        
        <h1>筋トレblog</h1>
        <a href='/posts/create'>本日のトレーニングを投稿</a>
         <div class='posts'>
             @foreach($posts as $post)
             <div class='post'>
                 <h2 class='title'>
                 	<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                 	</h2>
                 <p class='body'>{{ $post->body }}</p>
             </div>
             @endforeach
         </div>
          <div class='paginate'>
            {{ $posts->links() }}
          </div>
       
    </x-app-layout>
