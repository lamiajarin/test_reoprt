<!DOCTYPE html>
<html>


<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>




<style>

  h1,h2,h3,big {
   font-family:Comic Sans MS;  }

  .navbar {
      overflow: hidden;
      background-color:lightgrey;
      font-family: Comic Sans MS;
      font-weight: bolder;
  }

  .navbar a {
      float: left;
      font-size: 22px;
      color: black;
      text-align: center;
      padding: 12px 18px;
      text-decoration: none;
  }

  .dropdown {
      float: left;
      overflow: hidden;
      
  }

  .dropdown .dropbtn {
      font-family: Comic Sans MS;
      font-weight: bolder;
      font-size: 22px;    
      border: none;
      outline: none;
      color: darkblue;
      padding: 12px 18px;
      background-color: inherit;
  }

  .navbar a:hover, .dropdown:hover .dropbtn {
      background-color:white ;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: black;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
  }

  .dropdown-content a:hover {
      background-color:blue;
  }

  .dropdown:hover .dropdown-content {
      display: block;
  }


  div.container {
    width: 100%;
    border: none;
    height: 20px;
               }
  header, footer {
    font-family: Comic Sans MS;
    font-variant: small-caps;
    font-weight: bolder;
    padding: .5em;
    color: white;
    background-color: skyblue ;
    clear: right;
    text-align: center;
          }
    
  table { width: 80%; font-family: Algerian; font-weight: bold;}
    
  th {
    border: 1px;
    background-color: darkcyan;
    height: 50px;
    border-radius: 15px;
       }

  td {text-align: center;border-radius: 15px;border: 1px;}
  tr:nth-child(even) {background-color: cornflowerblue}
  tr:nth-child(odd) {background-color: white}


 
  ::-webkit-input-placeholder { color:#E41B17;}


  .button {
    padding: 10px 20px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    outline: none;
    color: solid red;
    background-color: red;
    border: none;
    border-radius: 15px;
    box-shadow: 0 9px black;
  }

  .button:hover {background-color: pink;}

  .button:active {
    background-color:  green;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
  }

  body{ opacity:0.75; }
  h2{ color:darkcyan; }
  .container-form {
  width: 500px;
  margin: auto;
}
.container-form-double {
  width: 90%;
  margin: auto;
}
.container-body {
  width: 100%;
  height: auto;
}
.container-search {
  width: 80%;
  margin: 15px auto 0 auto;
}
form {
    font-size: 153%;
}
form {
    color: darkcyan;
}
</style>




</head>
<body background="3.jpg">
<body>
<div class="container">
<header>
      <h1 >Test Report Management System in Hostpital</h1>
</header>

<div class="navbar">
  <a href="home.php">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
<a href="a.php">Patient Information</a>
			   <a href="b.php">Doctor Information</a>
			   <a href="c.php">Test Information</a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">View
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    
                      <a href="view_p.php">Patient Information</a> 
					    <a href="view_b.php">Doctor Information</a> 
                        <a href="view_t.php">Test Information</a>

    </div>
  </div>
		  <a href="search.php">Search</a>
  <a href="report.php">Report</a>
</div>