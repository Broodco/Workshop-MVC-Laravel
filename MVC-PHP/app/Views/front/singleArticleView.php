<?php
    $title = 'Article n° '.$article['id'];
?>
<?php
    ob_start();
?>
<div class="ui aligned center aligned grid">
    <div class="column">
        <h1 class="ui orange image header">
        <div class="content">
            Article
        </div>
        </h1>
        <div class="ui orange segment ">
            <h2 class="ui left floated header">
                <?= $article['title'] ?>
            </h2>
            <h5 class="ui right floated header">
                <?= $article['creation_date'] ?>
            </h5>
            <div class="ui clearing divider"></div>
            <p><?= $article['content'] ?></p>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require './Views/template/template.php';
?>