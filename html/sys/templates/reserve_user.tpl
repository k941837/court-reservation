{include file='header.tpl' title='Main Page'}


<style>

    main{
        margin-top:100px;
    }

    th{
        background-color: #f5f5f5;
    }

</style>

<main>

    <div class="container">

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


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="2" class="text-center">利用者の方はこちら</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>&#x2611;電話番号</th>
                    <td><input type="text"></td>
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



        <div class="d-flex align-items-center ">
            <button type="submit" class="btn btn-primary mr-2">利用者情報で予約する</button>
            <button onclick="history.back()" class="btn btn-primary">戻る</button>
        </div>



    </div>




    



</main>

{include file='footer.tpl'}