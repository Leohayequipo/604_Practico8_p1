<?php
$traducciones = [
    'a' => '阿',
    'b' => '比',
    'c' => '西',
    'd' => '迪',
    'e' => '伊',
    'f' => '艾弗',
    'g' => '吉',
    'h' => '艾尺',
    'i' => '艾',
    'j' => '杰',
    'k' => '开',
    'l' => '艾勒',
    'm' => '艾马',
    'n' => '艾娜',
    'o' => '哦',
    'p' => '屁',
    'q' => '苦',
    'r' => '艾儿',
    's' => '艾丝',
    't' => '提',
    'u' => '玉',
    'v' => '维',
    'w' => '豆布流',
    'x' => '艾克斯',
    'y' => '吾艾',
    'z' => '贼德'
];

$letraIngresada = strtolower(trim($_POST['letra'] ?? ''));

echo "<h1>Resultado</h1>";

if ($letraIngresada && isset($traducciones[$letraIngresada])) {
    echo "<p>La letra <strong>$letraIngresada</strong> se traduce como: <strong>{$traducciones[$letraIngresada]}</strong></p>";
} else {
    echo "<p>No hay traducción disponible para <strong>$letraIngresada</strong>.</p>";
}
?>
