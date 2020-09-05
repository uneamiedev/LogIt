@extends('layouts.app')

@section('content')


<section class="feed container">
    <article class="log">
        <header class="log__header">
            <div class="avatar"></div>
            <a href="#" class="log__header__name"><span>Amy </span>{{'@'}}amynem</a>
        </header>
        <p class="log__text">
            Hello World!<br>
            Aujourd'hui je débute le projet DevLog (nom temporraire)
        </p>
        <footer class="log__footer">
            <time datetime="">05/09/2020</time>
            <a href="#" class="log__footer__timeline">LogIt</a>
        </footer>
    </article>

    <article class="log">
        <header class="log__header">
            <div class="avatar avatar--pink"></div>
            <a href="#" class="log__header__name"><span>Amy </span>{{'@'}}amynem</a>
        </header>
        <p class="log__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed, facere eius cum asperiores, facilis, error expedita delectus commodi ut repellat ex? Laudantium, impedit quidem ipsum tenetur fugit sint ratione nemo, dolores assumenda ducimus, incidunt expedita inventore esse voluptas id. Minima accusantium ut vero, aliquid minus cupiditate beatae dolorem repellendus. Perferendis voluptate id, quidem iste laboriosam cupiditate. Quibusdam officiis, exercitationem explicabo facere error eos optio architecto cum pariatur necessitatibus veniam inventore corrupti repellat ea sapiente quo. Nostrum dolores quo recusandae iure repellendus at maxime? Quia impedit quaerat aliquid culpa, cum possimus corrupti nihil eum adipisci magni dolor itaque? Quidem, consequatur.
        </p>
        <footer class="log__footer">
            <time datetime="">05/09/2020</time>
            <a href="#" class="log__footer__timeline">30 Years Of Website</a>
        </footer>
    </article>
</section>

<section class="timeline container">
    <article class="log log--timeline">
        <p class="log__text">
            Hello World!<br>
            Aujourd'hui je débute le projet DevLog (nom temporraire)
        </p>
        <footer class="log__footer">
            <time datetime="">05/09/2020</time>
        </footer>
    </article>

    <article class="log log--timeline current">
        <p class="log__text">
            Aujourd'hui je passe à l'intégration du site.<br>
            CSS à la mano pour pouvoir s'amuser avec les mixins et travailler flexbox
        </p>
        <footer class="log__footer">
            <time datetime="">05/09/2020</time>
        </footer>
    </article>

    <article class="log log--timeline">
        <p class="log__text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed, facere eius cum asperiores, facilis, error expedita delectus commodi ut repellat ex? Laudantium, impedit quidem ipsum tenetur fugit sint ratione nemo, dolores assumenda ducimus, incidunt expedita inventore esse voluptas id. Minima accusantium ut vero, aliquid minus cupiditate beatae dolorem repellendus. Perferendis voluptate id, quidem iste laboriosam cupiditate. Quibusdam officiis, exercitationem explicabo facere error eos optio architecto cum pariatur necessitatibus veniam inventore corrupti repellat ea sapiente quo. Nostrum dolores quo recusandae iure repellendus at maxime? Quia impedit quaerat aliquid culpa, cum possimus corrupti nihil eum adipisci magni dolor itaque? Quidem, consequatur.
        </p>
        <footer class="log__footer">
            <time datetime="">05/09/2020</time>
        </footer>
    </article>
</section>


<div class="container">
    <h1>Titre de niveau 1</h1>
    <h2>Titre de niveau 2</h2>
    <h3>Titre de niveau 3</h3>
    <h4>Titre de niveau 4</h4>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, quae consequatur, expedita consectetur a dolores quasi magni iusto nemo incidunt minima cumque quos error beatae qui excepturi dolore debitis similique.
    </p>
</div>

<div class="container">
    <button class="btn btn--primary">Start timeline</button>
    <a class="btn btn--primary" href="#">Start timeline</a>

    <hr>

    <button class="btn btn--secondary">Explore</button>
    <a class="btn btn--secondary" href="#">Explore</a>

    <hr>

    <button class="btn btn--tertiary">Cancel</button>
    <a class="btn btn--tertiary" href="#">Cancel</a>
</div>

<div class="container">
    <nav class="tabs">
        <ul>
            <li class="tabs__item"><a href="#">Timelines</a></li>
            <li class="tabs__item current"><a href="#">Logs</a></li>
            <li class="tabs__item"><a href="#">Following</a></li>
            <li class="tabs__item"><a href="#">Followers</a></li>
        </ul>
    </nav>
</div>

@endsection
