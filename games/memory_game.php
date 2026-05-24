<?php
include '../includes/auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Memory Game</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <style>

        .memory-container{

            text-align:center;

            padding:40px;
        }

        .memory-grid{

            display:grid;

            grid-template-columns:repeat(4, 120px);

            gap:15px;

            justify-content:center;

            margin-top:30px;
        }

        .card{

            width:120px;
            height:120px;

            background:#00ffcc;

            border-radius:15px;

            display:flex;

            justify-content:center;
            align-items:center;

            font-size:2rem;

            cursor:pointer;

            color:black;

            user-select:none;
        }

        .hidden{

            background:#1f1f1f;
            color:transparent;
        }

        @media(max-width:768px){

            .memory-grid{

                grid-template-columns:repeat(2, 120px);
            }
        }

    </style>

</head>
<body>

<?php include '../includes/header.php'; ?>

<div class="memory-container">

    <h1>🧠 Memory Game</h1>

    <h2>Moves: <span id="moves">0</span></h2>

    <div class="memory-grid" id="memory-grid"></div>

</div>

<script src="../assets/js/memory.js"></script>

</body>
</html>