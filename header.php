<style>
    /* Add a black background color to the top navigation */
    .topnav {
      background-color: #333;
      overflow: hidden;
    }
    
    /* Style the links inside the navigation bar */
    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    /* Change the color of links on hover */
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Add a color to the active/current link */
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }

    .topnav a.not_in_use {
        color: grey;
    }

    table, th, td {
        border: 1px solid;
        border-collapse: collapse;
        padding: 5px 5px;
    }
</style>
<script src="./among.js"></script>

<div class="topnav">
    <a class="active" href="index.php">Home</a>
    <a href="echo.php">Echo</a>
    <a href="test.php">Test</a>
    <a href="if_else.php">Brain</a>
    <a href="mongo.php">MongoDB</a>
    <a href="loop.php">Loop</a>
    <a href="chess_board.php">Chess</a>
    <a class="not_in_use" href="news.php">News</a>
    <a class="not_in_use" href="contact.php">Contact</a>
    <a class="not_in_use" href="about.php">About</a>
</div>
