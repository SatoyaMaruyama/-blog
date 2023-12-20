<x-app-layout>
    <x-slot name="header">
        
        
        <div class="wrap">
    <!-- １つ目 -->
    <label for="label1">▼ クリックで展開1</label>
    <input type="checkbox" id="label1" class="switch" />
    <!-- ↓↓最初隠したいコンテンツ↓↓ -->
    <div class="content">
      <p>
        hogehoge
      </p>
    </div>
    <!-- ↑↑最初隠したいコンテンツ ↑↑-->
    
     <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </x-app-layout>
