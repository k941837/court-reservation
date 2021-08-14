<?php
/* Smarty version 3.1.39, created on 2021-08-13 17:38:09
  from '/var/www/html/sys/templates/reserve.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61162f71e3c309_78606434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81fbc9c0ab370897504aa1f669e1677cba3650ed' => 
    array (
      0 => '/var/www/html/sys/templates/reserve.tpl',
      1 => 1628843885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_61162f71e3c309_78606434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Main Page'), 0, false);
?>

    <style>
        .calendar-container {
        /* width: 500px; */
        margin: 0 auto;
        border-radius: 5px;
        background: #f6f5f4;
        color: #1a1a1a;
        }
        h1 {
        height: 80px;
        line-height: 80px;
        text-align: center;
        font-size: 24px;
        margin: 0;
        }
        .calendar {
        padding: 0 30px 30px 30px;
        }
        table {
        width: 100%;
        }
        th, td {
        text-align: center;
        padding: 10px;
        }
        th {
        font-weight: normal;
        font-size: 14px;
        }
        td {
        font-weight: bold;
        }
        .day *:first-child {
        color: #ff838b;
        }
        .day *:last-child {
        color: #6fb5ff;
        }
        
        .week0{
            background-color: #FF99CC;
        }
        .week6{
            background-color: #99CCFF;
        }

    </style>



<main>
    <div class="container">
        <!-- xxxx年xx月を表示 -->
        <div class="text-center mb-5 font-weight-normal" style="font-size: 40px; margin-top: 100px;">予約日時の選択</div>
        <h1 id="header"></h1>
    
        <!-- ボタンクリックで月移動 -->
        <div id="next-prev-button" class="text-center">
            <button id="prev" onclick="prev()">‹</button>
            <button id="next" onclick="next()">›</button>
        </div>
    
        <!-- カレンダー -->
        <div id="calendar"></div>
    </div>
</main>



<?php echo '<script'; ?>
 type="text/javascript">
    

        const week = ["日", "月", "火", "水", "木", "金", "土"];
        const today = new Date();
        // 月末だとずれる可能性があるため、1日固定で取得
        var showDate = new Date(today.getFullYear(), today.getMonth(), 1);

        // 初期表示
        window.onload = function () {
            showProcess(today, calendar);
        };
        // 前の月表示
        function prev(){
            showDate.setMonth(showDate.getMonth() - 1);
            showProcess(showDate);
        }

        // 次の月表示
        function next(){
            showDate.setMonth(showDate.getMonth() + 1);
            showProcess(showDate);
        }

        // カレンダー表示
        function showProcess(date) {
            var year = date.getFullYear();
            var month = date.getMonth();
            document.querySelector('#header').innerHTML = year + "年 " + (month + 1) + "月";

            var calendar = createProcess(year, month);
            document.querySelector('#calendar').innerHTML = calendar;
        }

        // カレンダー作成
        function createProcess(year, month) {
            // 曜日
            var calendar = "<table><tr class='dayOfWeek'>";
            for (var i = 0; i < week.length; i++) {
                calendar += `<th class=week${i}>` + week[i] + "</th>";
            }
            calendar += "</tr>";

            var count = 0;
            var startDayOfWeek = new Date(year, month, 1).getDay();
            var endDate = new Date(year, month + 1, 0).getDate();
            var lastMonthEndDate = new Date(year, month, 0).getDate();
            var row = Math.ceil((startDayOfWeek + endDate) / week.length);
            var display_month = month+1;

            // 1行ずつ設定
            for (var i = 0; i < row; i++) {
                calendar += "<tr>";
                // 1colum単位で設定
                for (var j = 0; j < week.length; j++) {
                    if (i == 0 && j < startDayOfWeek) {
                        // 1行目で1日まで先月の日付を設定
                        calendar += `<td><a href=#>` + (lastMonthEndDate - startDayOfWeek + j + 1) + "</a></td>";
                    } else if (count >= endDate) {
                        // // 最終行で最終日以降、翌月の日付を設定
                        // count++;
                        // calendar += `<td><a href=/sys/reserve_detail.php?year=${year}&month=${display_month}&day=${count}>` + (count - endDate) + "</a></td>";
                    } else {
                        // 当月の日付を曜日に照らし合わせて設定
                        count++;
                        if(year == today.getFullYear() && month == (today.getMonth()) && count == today.getDate()){
                            calendar += `<td><a href=/sys/reserve_detail.php?year=${year}&month=${display_month}&day=${count}>` + count + "</a></td>";
                        } else {
                            calendar += `<td><a href=/sys/reserve_detail.php?year=${year}&month=${display_month}&day=${count}>` + count + "</a></td>";
                        }
                    }
                }
                calendar += "</tr>";
            }
            return calendar;
        }

    
    <?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
