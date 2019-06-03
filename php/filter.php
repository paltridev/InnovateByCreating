<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="../css/swipestyle.css">
 <title>Innovate By Creating</title>
 <style>
 * {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}
#filterimg{
	width: 50%;

}

.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.filter {
    margin: 10px -16px;
	height:2000px;
}


.filter,
.filter > .column {
    padding: 8px;
}

.column {
    float: left;
    width: 500px;
     height: 550px;
    display: none; /* Hide all elements by default */
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    width:100%;

}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>

<div class="main">

<h2>Hardwares</h2>

<hr>



<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> 10000</button>
  <button class="btn" onclick="filterSelection('cars')"> 15000</button>
  <button class="btn" onclick="filterSelection('people')"> 20000</button>

</div>


<div class="filter">
  <div class="column nature">
    <div class="content">
	<a href="AMD Ryzen 3 2200G.php">
        <img src="../images/r3.jpg" alt="processors" style="width:50%">
		</a>
      <h4>AMD Ryzen 3 2200G</h4>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
	<a href="INTEL CORE I3-8100.php">
   <img src="../images/core13.jpg" alt="processors" id="filterimg" >
   </a>
      <h4>INTEL CORE I3-8100</h4>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
	<a href="AMD Ryzen 5 2600X.php">
    <img src="../images/r5.jpg" alt="processors"  id="filterimg" >
	 </a>
      <h4>AMD RYZEN 5 2600X</h4>

    </div>
  </div>

  <div class="column nature">
   <div class="content">
   <a href="Intel Core i5-8600k.php">
      <img src="../images/i5.jpg" alt="processors"  id="filterimg">
	   </a>
      <h4>INTEL CORE I5-8600K</h4>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
	 <a href="MSI.php">
     <img src="../images/msih270.jpg" alt="motherboard"  id="filterimg" >
	 </a>
      <h4>MSI H270 Gaming M3</h4>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
	 <a href="Intel Core i7-8700K.php">
    <img src="../images/i7.jpeg" alt="processors"  id="filterimg" >
	</a>
      <h4>INTEL CORE I7-8700K</h4>

    </div>
  </div>

  <div class="column nature">
    <div class="content">
	 <a href="asusprime.php">
     <img src="../images/asusprime.jpg" alt="motherboard"  id="filterimg" >
	 </a>
      <h4>ASUS Prime Z370-A</h4>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
	 <a href="gskillram.php">
      <img src="../images/gskillram.png" alt="ram"  id="filterimg" >
	  </a>
      <h4>G.Skill Trident Z RBG</h4>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
	 <a href="xfury.php">
		<img src="../images/hfram.jpg" alt="ram"   id="filterimg">
		</a>
      <h4>Kingston Hyper X Fury</h4>
    </div>
  </div>
   <div class="column cars">
    <div class="content">
	 <a href="msib350.php">
    <img src="../images/u8.png" alt="motherboard"   id="filterimg" >
	</a>
      <h4>MSI B350 Tomahawk</h4>

    </div>
  </div>
   <div class="column nature">
    <div class="content">
	<a href="gigabyte.php">
    <img src="../images/gigabyte.jpg" alt="motherboard"  id="filterimg" >
	</a>
      <h4>Gigabyte x299 Aorus</h4>

    </div>
  </div>
   <div class="column people">
    <div class="content">
	<a href="AsusRog.php">
    <img src="../images/asuszenith.jpg" alt="motherboard"  id="filterimg" >
	  </a>
      <h4>ASUS Rog Zenith Extreme</h4>

    </div>
  </div>
   <div class="column nature">
    <div class="content">
	<a href="xfury.php">
    <img src="../images/kfram.jpg" alt="motherboard"  id="filterimg" >
	</a>
      <h4>Hyper X Predator</h4>

    </div>
  </div>
   <div class="column cars">
    <div class="content">
	<a href="cvengeance.php">
    <img src="../images/cvram.jpg" alt="ram"  id="filterimg" >
	 </a>
      <h4>Corsair Vengeance</h4>
    </div>
  </div>
   <div class="column cars">
    <div class="content">
	<a href="Corsairdominator.php">
    <img src="../images/cdram.jpg" alt="motherboard"  id="filterimg" >
	</a>
      <h4>Corsair Dominant<h4>

    </div>
  </div>
   <div class="column people">
    <div class="content">
	<a href="nitro.php">
    <img src="../images/rtx2080.jpg" alt="motherboard"  id="filterimg" >
	</a>
      <h4>Sapphire Radeon NITRO+ RX 570<h4>
    </div>
  </div>
   <div class="column people">
    <div class="content">
	<a href="gtx1060.php">
    <img src="../images/gtx1060.jpg" alt="gpu"  id="filterimg" >
	</a>
      <h4>ZOTAC GeForce GTX 1060 Ti AMP Extreme Core Edition'<h4>

    </div>
  </div>
   <div class="column people">
    <div class="content">
	<a href="msir550.php">
    <img src="../images/rx550.png" alt="gpu"  id="filterimg" >
	 </a>
      <h4>MSI Radeon RX 560 AERO<h4>

    </div>
  </div>
   <div class="column cars">
    <div class="content">
	<a href="gtx1050mini.php">
    <img src="../images/gtx1050.jpg" alt="gpu"  id="filterimg" >
	 </a>
      <h4>GeForce GTX 1050 Mini<h4>

    </div>
  </div>
   <div class="column people">
    <div class="content">
	<a href="gtx1080.php">
    <img src="../images/gtx1080.png" alt="gpu" id="filterimg" >
	</a>
      <h4>ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition<h4>

    </div>
  </div>

</div>


</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
