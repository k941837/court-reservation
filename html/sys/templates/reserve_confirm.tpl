{include file='header.tpl' title='Main Page'}

<style>

    main{
        margin-top:150px;
    }

    th{
        background-color: #f5f5f5;
    }

</style>

<main>

    <div class="container mb-5">
        <h1>予約内容確認</h1>
        <form action="reserve_complete.php" method="POST">
            <input type="hidden" name="day" value="{$day}">
            <input type="hidden" name="month" value="{$month}">
            <input type="hidden" name="year" value="{$year}">
            <input type="hidden" name="spot" value="{$spot}">
            <input type="hidden" name="timestart" value="{$timestart}">
            <input type="hidden" name="name" value="{$name}">
            <input type="hidden" name="nickname" value="{$nickname}">
            <input type="hidden" name="mail" value="{$mail}">
            <input type="hidden" name="password" value="{$password}">
            <input type="hidden" name="tel" value="{$tel}">
            <input type="hidden" name="year" value="{$year}">
            <input type="hidden" name="month" value="{$month}">
            <input type="hidden" name="day" value="{$day}">
            <input type="hidden" name="court" value="{$court}">
            <input type="hidden" name="user_flg" value="{$user_flg}">

            <table class="table table-bordered">
                <tr>
                    <th>名前</th>
                    <td>{$name}</td>
                </tr>
                <tr>
                    <th>ニックネーム</th>
                    <td>{$nickname}</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{$mail}</td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>{$tel}</td>
                </tr>
                <tr>
                    <th>予約時間</th>
                    <td>{$year}年{$month}月{$day}日</td>
                </tr>
                <tr>
                    <th>コート番号</th>
                    <td>{$court}</td>
                </tr>
            </table>

            <div class="d-flex">
                <button type="submit" class="btn btn-primary mr-2">予約確定する</button>
                <button onclick="history.back()" class="btn btn-primary">戻る</button>
            </div>
        </form>

    </div>


</main>

{include file='footer.tpl'}