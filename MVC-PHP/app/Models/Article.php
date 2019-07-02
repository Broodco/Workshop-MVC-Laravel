<?php

namespace App\Models;

require_once './Connect.php';

class Article extends Connect
{
    public function getArticles ()
    {
        // Ici, on récupère la base de données.
        $database = $this->DBConnect();
        $articlesTable = $database->query("
            SELECT
                *,
                DATE_FORMAT(date_creation, '%Hh%i %d/%m') AS date_post
                FROM articles
                ORDER BY id DESC
        ");
        return $articlesTable;
    }
    public function getSingleArticle ($articleID)
    {
        $database = $this->DBConnect();
        $article = $database->prepare("
            SELECT
                *,
                DATE_FORMAT(date_creation, '%Hh%i %d/%m') AS date_post
                FROM articles
                WHERE id = ?
        ");
        $article->execute(array($articleID));
        $fetched_article=$article->fetch();
        return $fetched_article;
    }
}