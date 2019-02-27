<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>详情</title>
  <link rel="stylesheet" href="style.css">
  <script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
  <div class="main main3">
    <ul class="list" id="list">
      <?php for ($i=0;$i<20;$i++){ ?>
      <li>
        <div class="userImg"><img src="images/avatar.jpg" alt="头像"></div>
        <div class="d2">
          <p class="p1">
            <b class="name"><?php echo $i; ?>张伟</b>
            <span class="red">(<i class="num">233</i>票)</span>
          </p>
          <p class="p2"><span class="blue">中国移动</span></p>
        </div>
        <div class="d3">
          <span class="icon"></span>
          <span class="text">投 票</span>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  <script>
//    var list = document.getElementById('list');
//    list.click(alert(33))
    $(function () {
      $("#list li .d3").click(function () {
        var _this = $(this);
        var num = _this.parents("li").find(".num");
        if(_this.is(".act")){
          _this.removeClass("act");
          $(".text",_this).text("投 票");
          num.text(parseInt(num.text())-1);
        }else{
          _this.addClass("act");
          $(".text",_this).text("已投票")
          num.text(parseInt(num.text())+1);
        }
      })
    })
  </script>
</body>
</html>