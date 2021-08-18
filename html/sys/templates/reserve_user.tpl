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
        <h1>利用者情報入力</h1>
        <div class="aaa mb-5" style="border:solid 0.5px #333; padding: 10px;">
            必須アイコン は必須入力となります<br>
            ＜新規にご利用の方に＞<br>
            ・登録の際、入力いただいたメールアドレス宛に確認メールを送信いたします。<br>
            メール記載のURLにアクセスして登録を完了してください。<br>
            ※迷惑メール対策等で、ドメイン指定受信を設定されている場合に、<br>
            メー ルが正しく届かないことがございます。<br>
            以下のドメインを受信できるように設定をお願いいたします。<br><br>
            @sato-tennis.com<br><br>
            ・登録後、予約の確認・抽選予約の抽選結果などを入力いただいたメールアドレスに送信させていただきます。<br>
            ・登録後にキャンセルするには、電話番号とメールアドレス、パスワードが必要となります。<br>
            ※ここでの入力情報は、この予約だけに適用されます。継続利用される 場合、先に利用者登録をお願いいたします。<br><br>
            <span style="color:red">＜予約の取り消しについて＞</span><br>
            <span style="color:red">予約日の10日前までは、無料で取り消しいただけます。</span><br>
            <span style="color:red">9日前から当日までの取り消しには、コート料金が発生いたします。</span><br>
        </div>


        {if isset($infomation_text)}
        {include file='infomation.tpl'
            infomation_text = $infomation_text
        }
        {/if}

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">利用者の方はこちら</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>&#x2611;電話番号</th>
                    <td><input type="text"><br>半角数字で入力してください。入力例、06-6325-2231</td>
                </tr>
                <tr>
                    <th>&#x2611;メールアドレス</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>&#x2611;パスワード</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>&#x2611;支払い方法</th>
                    <td>&#9678;受付払い</td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex mb-5">
            <button type="submit" class="btn btn-primary mr-2">利用者情報で予約する</button>
            <button onclick="history.back()" class="btn btn-primary">戻る</button>
        </div>


        <form action="reserve_confirm.php" method="post">
            <input type="hidden" name="day" value="{$day}">
            <input type="hidden" name="month" value="{$month}">
            <input type="hidden" name="year" value="{$year}">
            <input type="hidden" name="spot" value="{$spot}">
            <input type="hidden" name="timestart" value="{$timestart}">
            <input type="hidden" name="user_flg" value="0">
            <table class="table table-bordered">
                <tr>
                    <th colspan="2" class="text-center">新規の方はこちら</th>
                </tr>
                <tr>
                    <th>&#x2611;電話番号</th>
                    {if !empty($errorlist)}
                        <td><input type="text" name="tel" value="{$errorlist.tel}"><br>半角数字で入力してください。入力例、06-6325-2231</td>
                    {else}
                        <td><input type="text" name="tel"><br>半角数字で入力してください。入力例、06-6325-2231</td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;メールアドレス</th>
                    {if !empty($errorlist)}
                        <td><input type="text" name="mail" value="{$errorlist.mail}"></td>
                    {else}
                        <td><input type="text" name="mail"></td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;メールアドレス確認</th>
                    {if !empty($errorlist.mail-confirm)}
                        <td><input type="text" name="mail-confirm" value="{$errorlist.mail-confirm}"></td>
                    {else}
                        <td><input type="text" name="mail-confirm"></td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;パスワード</th>
                    {if !empty($errorlist)}
                        <td><input type="text" name="password" value="{$errorlist.password}"></td>
                    {else}
                        <td><input type="text" name="password"></td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;パスワード確認</th>
                    {if !empty($errorlist.password-confirm)}
                        <td><input type="text" name="password-confirm" value="{$errorlist.password-confirm}"></td>
                    {else}
                        <td><input type="text" name="password-confirm"></td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;支払い方法</th>
                    <td>受付払い</td>
                </tr>
                <tr>
                    <th>&#x2611;ニックネーム・チーム名</th>
                    {if !empty($errorlist)}
                        <td><input type="text" name="nickname" value="{$errorlist.nickname}"></td>
                    {else}
                        <td><input type="text" name="nickname"></td>
                    {/if}
                </tr>
                <tr>
                    <th>&#x2611;予約者名:漢字</th>
                    {if !empty($errorlist)}
                        <td><input type="text" name="name" value="{$errorlist.name}"></td>
                    {else}
                        <td><input type="text" name="nickname"></td>
                    {/if}
                </tr>
                <tr>
                    <th>予約者名:かな</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>郵便番号</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>市区町村番地</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>その他</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>生年月日</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>その他連絡先</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>その他連絡先:電話番号</th>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <th>お問い合わせ</th>
                    <td><input type="text"></td>
                </tr>
            </table>

            <div class="d-flex mb-5">
                <button type="submit" class="btn btn-primary mr-2">確認する</button>
                <button onclick="history.back()" class="btn btn-primary">戻る</button>
            </div>
        </form>

    </div>

</main>

{include file='footer.tpl'}