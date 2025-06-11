<?php
$letras_zh = [
    'a' => '艾',
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
    'm' => '艾姆',
    'n' => '艾娜',
    'o' => '哦',
    'p' => '屁',
    'q' => '吉吾',
    'r' => '艾儿',
    's' => '艾丝',
    't' => '提',
    'u' => '玉',
    'v' => '维',
    'w' => '豆贝尔维',
    'x' => '艾克斯',
    'y' => '吾艾',
    'z' => '贼德'
];
?>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f8fa;
            color: #333;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            max-width: 400px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            transition: border-color 0.3s ease;
        }
    

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 1em;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            max-width: 400px;
            background-color: #e9f5ff;
            padding: 15px;
            border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            font-size: 1.1em;
        }
    </style>
</head>

<form method="post">
    <label>Ingrese una palabra en español:</label>
    <input type="text" name="palabra" required>
    <button type="submit">Traducir</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $palabra = strtolower($_POST['palabra']);
    $letras = str_split($palabra);

   
    $resultado="";

  
    foreach ($letras as $letra) {
        if (isset($letras_zh[$letra])) {
            $resultado .= $letras_zh[$letra];
        } else {
           $resultado="no se ingreso ninguna palabra o letra";
        }
    }

    echo "<p><strong>Palabra ingresada:</strong> $palabra</p>";
    echo "<p><strong>Traducción:</strong> $resultado</p>";
}
?>
