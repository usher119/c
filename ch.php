<?php 
$str="<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement(script);
  hm.src = 'https://hm.baidu.com/hm.js?7854e507255a17adb77cf2d0d96ba9f1';
  var s = document.getElementsByTagName(script)[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>";

echo htmlspecialchars($str,ENT_QUOTES);
echo "</br>";
echo strip_tags($str);



?>
