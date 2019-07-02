<?php
    $title = 'New article';
?>
<?php
    ob_start();
?>
<div class="ui aligned center aligned grid">
    <div class="column">
        <h1 class="ui orange image header">
            <div class="content">
                Create a new article
            </div>
        </h1>
        <div class="ui white segment fluid">
            <form method="post" action="index.php?action=create" class="ui reply form">
                <div class="field">
                    <input type="text" name="title" placeholder="Title">
                </div>
                <div class="field">
                    <textarea rows="2" name="content" placeholder="Content"></textarea>
                </div>
                <button class="ui submit labeled icon orange button" type="submit" >
                    <i class="send icon"></i> 
                    Create new article
                </button>
            </form>
        </div>
    </div>
</div>
<?php
    $content = ob_get_clean();
    require './Views/template/template.php';
?>