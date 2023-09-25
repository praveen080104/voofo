<html>
    <head>
        <title>Voofo!</title>
        <link href="../css/voofo.css" rel="stylesheet">
        <link rel="icon" href="../images/Voofo!icon.png" type="image/png">
    </head>
    <body class="barbecuepage">
        <div class="navdiv"><nav class="barbecuenav">
            <img src="../images/Voofo!logo_navagiation_bar.png" onclick="voofologo1()">
            <img src="../images/home-button.png" onclick="voofologo1()" style="height:40px;width:40px;padding-left:30px;">
        </nav>
    </div>
    <div class="the-container"><div class="img-tablereserve-container"><div class="barbecue-image"><img src="../images/Smokehubbarbecue.png" class="abbq-jpg"></div>
    <form class="book-a-table-form" method="POST" action="connect3.php">
        <h2 class="book-a-table">BOOK A TABLE</h2>
        Select Outlet: <select class="outlet" name="outlet">
            <option value="">-select-</option>
            <option value="Porur">Porur</option>
            <option value="Pallavaram">Pallavaram</option>
            <option value="Ashok Nagar">Ashok Nagar</option>
        </select><br><br>
        Number of Persons:
        <input type="number" min="1"max="20"class="no-of-persons" name="nof">
        <br><br>
        Date: <input type="date" name="date">
        <br><br>
        Timings:
            <select class="outlet1" name="time">
        <option value="">-select-</option>
        <option value="12:00pm">12:00pm</option>
        <option value="2:00pm">2:00pm</option>
        </select>
        <br>
        <div class="make-a-reservation">
        <button name="submit">Make Reservation</button>
        </div>
    </form>
</div>
</div>
<div class="grid-buttons1"><button onclick="back2()"> < Back </button></div>
<script src="../js/Voofo.js"></script>
    </body>
</html>