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

      <?php for ($i=1;$i<4;$i++){ ?>
      <li class="no<?php echo $i; ?>">
        <div class="userImg"><img src="images/avatar.jpg" alt="头像"></div>
        <div class="d2">
          <p class="p1">
            <b class="name"><?php echo $i; ?>张伟</b>
            <span class="red">(<i class="num">233</i>票)</span>
          </p>
          <p class="p2"><span class="blue">中国移动</span><u>员工详情&gt;&gt;</u></p>
        </div>
        <div class="d3">
          <span class="icon"></span>
          <span class="text">投 票</span>
        </div>
      </li>
      <?php } ?>
      <?php for ($i=0;$i<20;$i++){ ?>
      <li>
        <div class="userImg"><img src="images/avatar.jpg" alt="头像"></div>
        <div class="d2">
          <p class="p1">
            <b class="name"><?php echo $i; ?>张伟</b>
            <span class="red">(<i class="num">233</i>票)</span>
          </p>
          <p class="p2"><span class="blue">中国移动</span><u>员工详情&gt;&gt;</u></p>
        </div>
        <div class="d3">
          <span class="icon"></span>
          <span class="text">投 票</span>
        </div>
      </li>
      <?php } ?>
    </ul>
  </div>
  <div class="tan details" style="display: none;">
      <div class="mainTan">
          <div class="d1">
              <div class="userImg"><img src="images/avatar.jpg" alt="头像"></div>
              <div class="d2">
                  <p class="p1">
                      <b class="name"><?php echo $i; ?>张伟</b>
                      <span class="red">(<i class="num">233</i>票)</span>
                  </p>
                  <p class="p2"><span class="blue">中国移动</span></p>
              </div>
          </div>
          <div class="text">
              <p>2013年至今，就职于北京联通网安部任高级技术经理，主要负责网络单元定级备案、等级保护、试点示范项目推广等工作。主要成绩如下：</p>
              <p>1、围绕网络与信息安全责任考核要求，完善北京公司网络安全防护责任体系和工作体系。</p>
              <p>2018年度工信部责任考核首次明确要求对合作类网络与系统定级备案。为切实落实企业网络安全责任，牵头建立覆盖公司范围的定级备案工作机制。目前，北京公司53个二级单位均已明确二级主管领导及接口人，151个定级网络单元均设立网络安全责任领导和技术负责人。为确保管理有效性，组织运维部、信息化部等部门分层级、分专业梳理和优化网络安全策略及流程规范，进一步完善北京公司网络安全防护体系。</p>
              <p>2、积极探索管理办法，努力推动网络安全防护能力提升。</p>
              <p>全量开展网络单元定级备案，至少每月一次征集、汇总各单位定级备案变更情况，确保定级备案工作准确、及时。在满足年度责任考核基础上，加大自查频次，强化风险管控。2018年组织各单位对全网设备进行两次全盘清查和梳理，以及通过每月适时新增调整，北京公司定级单元数量由2017年63个增加到151个。目前全网所有设备和系统均已纳入工信部等保体系，全量完成符合性评测、风险评估并及时整改。针对合作平台薄弱环节，积极探索管理办法，研制工作模板，组织部门学习借鉴先进经验，全面梳理合作业务合同，增加网络信息安全约束条款，将重点合作平台纳入日常安全扫描范围。</p>
              <p>3、组织做好网络安全试点示范项目推广工作。</p>
              <p>组织各单位学习借鉴工信部历年网络安全试点示范项目，通过劳动竞赛等方式，广泛征集、选拔北京公司优秀网络安全项目。2016年，北京联通IDC网络安全分析防护系统、内网安全集中管控平台成功入选为工信部试点示范项目。2018年北京有两个项目已经通过集团内部专家评审，现进入下一轮工信部试点示范项目申报。</p>
          </div>
          <div class="close"></div>
      </div>
  </div>
  <script>
//    var list = document.getElementById('list');</p>
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
      });
      $("#list li u").click(function () {
          $(".tan.details").show();
      });
      $(".tan .close").click(function () {
          $(this).parents(".tan").hide();
      });
    })
  </script>
</body>
</html>