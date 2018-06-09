<html>
<head>
    <title><?=$this->e($title)?></title>
</head>
<body>

    <!-- emmet : header+main+footer -->
    <header>
        <!-- emmet: nav(ul(li(a)*2)) -->
        <nav>
            <ul>
                <li><a href="<?= $router->generate('main_home') ?>">Accueil</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?=$this->section('content')?>
    </main>
    <footer>

    </footer>

</body>
</html>
