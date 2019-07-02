<?php
    $title = 'Home';
?>
<?php
    ob_start();
?>
<div class="ui aligned center aligned grid">
    <div class="column">
        <h2 class="ui orange image header">
        <div class="content">
            Home
        </div>
        </h2>
        <?php
            while($entry = $articleTable->fetch()){
        ?>
            <a href="/index.php?action=article&id=<?= $entry['id'] ?>">
                <div class="ui orange segment">
                    <h2 class="ui left floated header">
                        <?= $entry['title'] ?>
                    </h2>
                    <h5 class="ui right floated header">
                        <?= $entry['creation_date'] ?>
                    </h5>
                    <div class="ui clearing divider"></div>
                    <p><?= $entry['content'] ?></p>
                </div>
            </a>
        <?php
            }
            $articleTable->closeCursor();
        ?>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require './Views/template/template.php';
?>