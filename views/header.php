<!DOCTYPE html>
<html lang="<?php echo LANG ?>">
<head>
<meta charset="<?php echo DEFAULT_CHARSET ?>" />
<title><?php echo $this->titulo; ?></title>
<?php 
    $this->setCSS();
    
    $this->setJS();
?>
</head>
<body>
<div id="ag-page-wrapper">
    <header id="ag-header">
    	<h1 id="ag-site-title" class="title">Agframework</h1>
    </header>