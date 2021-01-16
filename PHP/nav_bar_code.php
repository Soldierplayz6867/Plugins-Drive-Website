<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="nav_bar_code.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>⸎Plugins Drive⸎插件討論</title>
</head>
<body>
  <div class="navbar">
    <a href="/">首頁</a>
    <a href="/forum/">論壇</a>
    <div class="subnav">
      <button class="subnavbtn">所有插件 <i class="fa fa-caret-down"></i></button>
      <div class="subnav-content">
        <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Dropdown</button>
        <div id="myDropdown" class="dropdown-content">
                <a href="/plugins/整理箱子.php">整理箱子</a>
                <a href="/plugins/玩家資料庫.php">玩家資料庫</a>
                <a href="/plugins/跑酷.php">跑酷</a>
                <a href="/plugins/書架.php">書架</a>
                <a href="/plugins/伐木.php">伐木</a>
        </div>
        </div>
      </div>
    </div>
    <a target="_blank" href="https://discord.gg/a4RA8NS">Discord</a>
  </div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>