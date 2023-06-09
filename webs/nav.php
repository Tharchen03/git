<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>navagation bar</title>
    <link rel="stylesheet" href="project.css" type="text/css">
    <style>
        /* Add a black background color to the top navigation bar */
        .topnav {
          overflow: hidden;
          background-color: rgb(240, 179, 179);
          font-family: Roboto Mono,monospace;
        }
        
        /* Style the links inside the navigation bar */
        .topnav a {
          float: left;
          display: block;
          color: black;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
        }
        
        /* Change the color of links on hover */
        .topnav a:hover {
          background-color: rgb(15, 14, 14);
          color: white;
        }
        
        /* Style the "active" element to highlight the current page 
        .topnav a.active {
          background-color: #2196F3;
          color: white;
        }*/
        
        /* Style the search box inside the navigation bar */
        .topnav input[type=text] {
          float: right;
          padding: 6px;
          border: none;
          margin-top: 8px;
          margin-right: 16px;
          font-size: 17px;
        }
        
        /* When the screen is less than 600px wide, stack the links and the search field vertically instead of horizontally */
        @media screen and (max-width: 600px) {
          .topnav a, .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
          }
          .topnav input[type=text] {
            border: 1px solid #ccc;
          }
        }

        </style>
</head>
<body>

<div class="topnav">
  <a  href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="#=">About</a>
  <a href="#">Contact</a>
  <input type="text" placeholder="Search..">
</div>
    
</body>
</html>