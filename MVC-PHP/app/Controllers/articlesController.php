<?php

use App\Models\ArticleManager;

require_once './Models/ArticleManager.php';

function listArticles()
{
    $articleManager = new ArticleManager();
    $articleTable = $articleManager->getArticles();
    require './Views/front/listArticlesView.php';
}

function showArticle($articleID)
{
    $articleManager = new ArticleManager();
    $article = $articleManager->getSingleArticle($articleID);
    require './Views/front/singleArticleView.php';
}

function addArticle()
{
    require './Views/front/newArticleView.php';
}

function createArticle($title,$content)
{
    $articleManager = new ArticleManager();
    $newArticle = $articleManager->createArticle($title,$content);
    if ($newArticle === false){
        throw new Exception('Error during create of the article');
    }
    else{
        listArticles();
    }
}