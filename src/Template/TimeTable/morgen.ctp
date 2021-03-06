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
        <title><?php echo date('d.m.Y', time() + (60*60*24) + 60*60*2); ?> - Vertretungsplan</title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
    </head>
    <body class="home">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td>Kurs</td>
                    <td>Stunde</td>
                    <td>Art</td>
                    <td>Fach</td>
                    <td>Raum</td>
                    <td>Text</td>
                    <td>Grund</td>
                </tr>
            </thead>
            <tbody>
                <?php
                /*foreach($motd as $mo){
                    echo $mo->txt;
                    echo "<BR>";
                }*/
                foreach($payload as $h):
                ?>
                <tr>
                    <td><?= $h->klasse->bezeichnung; ?></td>
                    <td><?= $h->stunde; ?></td>
                    <td><?= $h->art; ?></td>
                    <td><?= $h->fach; ?></td>
                    <td><?= $h->raum; ?></td>
                    <td><?= $h->text; ?></td>
                    <td><?= $h->grund; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>