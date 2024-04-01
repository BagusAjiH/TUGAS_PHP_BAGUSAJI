<?php
include_once 'webmenu.php'
?>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background-color: darkviolet;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 36px;
        }

        nav {
            background-color: mediumorchid;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
    <h1 style="font-family: 'Shadows Into Light', cursive;">SKATEWORLD</h1>
    </header>
    <nav>
        <!-- Home | Produk | Pesan | Galeri | Guestbook -->
        <?php
        //looping foreach dari webmenu.php
        foreach ($menu_atas as $key => $value) {
            echo "<a href='index.php?hal=$key'>$value </a> |";
        }
        ?>
    </nav>
</body>

</html>

    </div>