<?php

$loader = require 'vendor/autoload.php';
/*$loader->add('Phpr\\', __DIR__);
$loader->add('Teste\\', __DIR__);*/


use Phpr\Base, Phpr\Carro, Teste\Moto, PedroRocha\Lancha\Jet;

/*$oi = new Base();
echo "<br>" . $oi->digaoi();

$oi = new Carro();
echo "<br>" . $oi->digaCarro();

$oi = new Moto();
echo "<br>" . $oi->digaMoto();

$oi = new Jet();
echo "<br>" . $oi->digaJet();*/

// essa linha mostra os dados do DB

$scon = Conecta\Conn::getInstance();
$prepara = $scon->prepare('SELECT id_usuario, nr_cpf, senha, no_usuario, email, ativo FROM usuario');
$prepara->execute();
$linha = $prepara->fetchAll();
foreach ($linha as $l) {
   echo "<br>" . $l['id_usuario'] . " - " . $l['no_usuario'];
}

$scon = Conecta\Conn::getInstance();
$prepara = $scon->prepare('SELECT * FROM evento');
$prepara->execute();
$linha = $prepara->fetchAll();
foreach ($linha as $l) {
    echo "<br>" . $l['id_evento'] . " - " . $l['no_evento'];
}


/*$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');*/