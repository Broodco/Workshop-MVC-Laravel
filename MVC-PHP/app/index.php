<?php

require './Controllers/articlesController.php';

try{

    if (isset($_GET['action'])){
        $action = $_GET['action'];
        switch ($action){
            case 'article':
                if (isset($_GET['id']) && $_GET['id'] > 0){
                    $id = $_GET['id'];
                    showArticle($id);
                } else {
                    throw new Exception('Error : Wrong ID');
                }
                break;
            case 'add':
                addArticle();
                break;
            case 'create':
                if (isset($_POST['title']) AND ($_POST['title'] != "")){
                    if (isset($_POST['content']) AND ($_POST['content'] != "")){
                        createArticle($_POST['title'],$_POST['content']);
                    } else {
                        throw new Exception('Error : Empty text');
                    }
                } else {
                    throw new Exception('Error : Empty title');
                }
                break;
        }
    } else{
        listArticles();
    }
}
catch(Exception $e){
    $errorMessage = $e->getMessage();
    echo $errorMessage;
};