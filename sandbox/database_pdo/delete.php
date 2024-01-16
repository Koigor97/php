<?php

require_once 'database.php';

// check if form was submitted
$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'delete';

// if delete request, delete post and redirect to index page
if ($isDeleteRequest) {
  // get id from form
  $id = $_POST['id'];

  // create sql query
  $sql = 'DELETE FROM posts WHERE id = :id';

  // prepare the statement
  $stmt = $pdo->prepare($sql);

  // replace the placeholder with actual value of the id
  $params = ['id' => $id];

  // execute the statement
  $stmt->execute($params);

  // redirect to index page
  header('Location: index.php');
  exit;
}

