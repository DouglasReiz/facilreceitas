<?php
// Define o diretório de destino
$deploy_directory = '/home2/canti662/facilreceitas.com.br/receita_facil_site/';

// Define o branch que será implantado
$branch = 'main';

// Clona o repositório
$output = shell_exec('cd ' . $deploy_directory . ' && git pull origin ' . $branch);
echo "<pre>$output</pre>";
?>
