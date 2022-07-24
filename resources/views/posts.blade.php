<!doctype html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    @foreach($posts as $post)
        <article>
{{--            <h1><a href="/posts/my-first-post">My First Post</a></h1>--}}

{{--            <p>--}}
{{--                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut commodi consequatur culpa delectus et eveniet ex illum, iure minima quaerat, quis unde voluptatem? Architecto autem dolores ducimus, eos esse ex fuga harum id laboriosam molestias nam nesciunt quod saepe suscipit, vero! Adipisci aliquid amet autem consequatur dolores excepturi expedita explicabo facere facilis illum, ipsa labore obcaecati perspiciatis quis quos repellendus saepe similique. Accusantium adipisci alias aspernatur aut cumque debitis dicta dolor doloremque eius eligendi et expedita fugiat ipsam laboriosam laudantium libero maxime minima nisi nobis nostrum officiis omnis provident quas quibusdam quo repellat sed tempore, totam unde ut! Blanditiis, placeat.--}}
{{--            </p>--}}
            {{ $post }}
        </article>
    @endforeach
</body>
