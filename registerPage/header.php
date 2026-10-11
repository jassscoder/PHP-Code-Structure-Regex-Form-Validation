<?php
$pageTitle = $pageTitle ?? 'Join the Soul Society';
$cssFile = $cssFile ?? 'registerPage.css';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Create your Soul Society account.">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($cssFile); ?>">
</head>
<body>
