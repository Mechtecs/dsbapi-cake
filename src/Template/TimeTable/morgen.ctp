<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "default";

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo date('d.m.Y', time() + (60*60*24)); ?> - Vertretungsplan</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
</head>
<body class="home">
<?php
foreach($motd as $mo){
    echo $mo->txt;
    echo "<BR>";
}
foreach($payload as $h){
    var_dump($h);
    echo "<BR>";
}
?>
</body>
</html>