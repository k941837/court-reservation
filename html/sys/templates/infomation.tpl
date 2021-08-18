{*
    {include file='infomation.tpl' 
    infomation_text = $infomation_text
    }
    *}
    {if !empty($infomation_text)}
    <div class="container" id="infomation">
        {if preg_match('/ERROR|NG/',$infomation_text)}
            <div class="alert alert-danger my-alert">
        {elseif preg_match('/WARNING/',$infomation_text)}
            <div class="alert alert-warning my-alert">
        {else}
            <div class="alert alert-info my-alert">
        {/if}
            <p type="button" class="btn btn-default" id="infomation_close" style="position:absolute; top:0px;right: 0px;">×</p>
            {$infomation_text|replace:"\n":"<br/>"}
        </div>
    </div>
    {/if}
    <script type="text/javascript">
    {literal}
        $(function() {
            $('#infomation_close').on('click', function() {
                $(".my-alert").fadeOut(500);
            });
        });
    {/literal}
    </script>