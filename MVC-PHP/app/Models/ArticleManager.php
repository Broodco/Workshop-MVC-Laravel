<?php

namespace App\Models;

require_once 'Connect.php';

class ArticleManager extends Connect
{
    public function getArticles ()
    {
        // Ici, on récupère la base de données.
        $database = $this->DBConnect();
        $articlesTable = $database->query("
            SELECT
                *,
                DATE_FORMAT(creation_date, '%Hh%i %d/%m') AS creation_date
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
                DATE_FORMAT(creation_date, '%Hh%i %d/%m') AS creation_date
                FROM articles
                WHERE id = ?
        ");
        $article->execute(array($articleID));
        $fetched_article=$article->fetch();
        return $fetched_article;
    }
    public function createArticle ($title, $content)
    {
        $database = $this->DBConnect();
        $req = $database->prepare('
            INSERT
                INTO articles
                    (title,content,creation_date)
                VALUES
                    (:title,:content,NOW())
        ');
        $newArticle = $req->execute(
            array(
                'title' => htmlspecialchars($title),
                'content' => htmlspecialchars($content)
            )
        );
        return $newArticle;
    }
}