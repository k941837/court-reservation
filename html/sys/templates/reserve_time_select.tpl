{include file='header.tpl' title='Main Page'}

<style>

    main{
        margin-top:100px;
    }

    th{
        background-color: lightgrey;
    }

</style>


<main>

    <div class="container">

        <div class="setumei" style="border: solid; margin-bottom: 40px;">
            &#x2611;は必須入力となります。<br>
            <span style="color:red;">＜予約の取り消しについて＞<br></span>
            予約日の10日前までは、無料で取り消しいただけます。<br>
            9日前から当日までの取り消しには、コート料金が発生いたします。
        </div>

        <form action="reserve_user.php" method="POST">

            <table class="table table-bordered">
                <tr>
                    <th>&#x2611;予約日</th>
                    <td>{$year}年{$month}月{$day}日</td>
                </tr>
                <tr>
                    <th>&#x2611;施設・時間</th>
                    <td>
                        【くにじまテニス】 パデルコート： {$timestart}:00～
                        <input type="time" name="timeend" list="data1">
                        <datalist id="data1">
                            <option value="09:00"></option>
                            <option value="10:00"></option>
                            <option value="11:00"></option>
                            <option value="12:00"></option>
                            <option value="13:00"></option>
                            <option value="14:00"></option>
                            <option value="15:00"></option>
                            <option value="16:00"></option>
                            <option value="17:00"></option>
                            <option value="18:00"></option>
                            <option value="19:00"></option>
                        </datalist>
                    </td>
                </tr>
            </table>
            <!-- <button type="button" class="btn btn-primary btn-block"><a href="reserve_user.php?" style="color:white;">次へ</a></button> -->
            <!-- <button type="button" onclick="location.href='reserve_user.php?timestart={$timestart}'" class="btn btn-primary btn-block">次へ</button> -->

            <input type="hidden" name="day" value="{$day}">
            <input type="hidden" name="month" value="{$month}">
            <input type="hidden" name="year" value="{$year}">
            <input type="hidden" name="spot" value="{$spot}">
            <input type="hidden" name="timestart" value="{$timestart}">
            <button type="submit" class="btn btn-primary">次へ</button>
        </form>

    </div>
    
</main>

{include file='footer.tpl'}