@extends('layouts.app')

@section('content')

<header class="header-section">
    <h1>Privacy policy</h1>
    <p>This is description</p>
</header>

<header class="header-section header-section--profile">
    <div class="container">
        <span class="h1">Amy</span>
        <span class="header-section--profile__username">{{'@amynem'}}</span>
        <p class="header-section--profile__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, fuga molestiae! Assumenda corrupti mollitia id.</p>
        <div class="header-section--profile__misc">
            <span>The world wide web</span>
            <span><a class="is-link" href="#">30yearsofweb.site</a></span>
        </div>
    </div>

    <nav class="tabs">
        <ul class="container">
            <li class="tabs__item"><a href="#">Timelines</a></li>
            <li class="tabs__item current"><a href="#">Logs</a></li>
            <li class="tabs__item"><a href="#">Following</a></li>
            <li class="tabs__item"><a href="#">Followers</a></li>
        </ul>
    </nav>
</header>

<header class="header-section header-section--timeline container">
    <h1 class="text-reveal">30 Years Of Website</h1>
    <div class="meta">
        <address>by <a href="#" rel="author" class="is-bold is-link">Amy</a></address>
        <div>created on <time pubdate datetime="2020-08-26">26/08/2020</time> | updated on <time datetime="2020-09-06">06/09/2020</time>
        </div>
    </div>
    <p>This project was build to share the information I gather in my search on web history</p>
    <a class="is-link" href="#">30yearsofweb.site</a>
</header>

<section class="container">
    <form action="" class="form">
        <div class="field error">
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Name of the timeline">
            <em class="field__error">This name is already taken.</em>
        </div>

        <div class="field">
            <label for="description" class="">{{ __('Description') }}</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Tell us about your project"></textarea>
        </div>

        <div class="field field--checkbox">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>

        <div class="form__footer">
            <a href="#" class="btn btn--tertiary">Cancel</a>
            <button type="submit" class="btn btn--primary">
                {{ __('Start timeline') }}
            </button>
        </div>
    </form>
</section>

<section class="container">
    <form action="" class="form">
        <div class="field">
            <label for="timelineSelect">{{ __('Pick a timeline') }}</label>
            <select name="timeline" id="timelineSelect" class="custom-select">
                <option value="LogIt">{{ __('LogIt') }}</option>
                <option value="LogIt">{{ __('30 years of website') }}</option>
                <option value="LogIt">{{ __('CV') }}</option>
            </select>
        </div>

        <div class="field">
            <label for="body" class="">{{ __('Body') }}</label>
            <textarea name="body" id="body" cols="30" rows="10" placeholder="Tell us about your project"></textarea>
        </div>

        <div class="form__footer">
            <a href="#" class="btn btn--tertiary">Cancel</a>
            <button type="submit" class="btn btn--primary">
                {{ __('Start timeline') }}
            </button>
        </div>
    </form>
</section>


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
