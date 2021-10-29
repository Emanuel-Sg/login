<?PHP
session_start();

global $conexao;
try {
    $conexao = new PDO('mysql:host=127.0.0.1;dbname:hash', 'root', 'emanuelbraganca');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
