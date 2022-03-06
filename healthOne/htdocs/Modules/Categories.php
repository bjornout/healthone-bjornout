<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $query = $pdo->prepare(query: "SELECT * FROM category");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Category');
    return $result;

}

function getCategoryName(int $id)
{
    
}
