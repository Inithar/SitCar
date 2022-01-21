{if $msgs->isMessage()}
    <div>
        <ul class="ul-messages">
            {foreach $msgs->getMessages() as $msg}
            {strip}
                <li class="msg {if $msg->isError()}error{/if} {if $msg->isWarning()}warning{/if} {if $msg->isInfo()}info{/if} messages">{$msg->text}</li>
            {/strip}
            {/foreach}
        </ul>
    </div>
{/if}