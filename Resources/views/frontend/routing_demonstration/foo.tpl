{extends file="parent:frontend/routing_demonstration/index.tpl"}
{block name='frontend_index_content'}
    {$smarty.block.parent}
    <p>Hier kommt noch ein bisschen Text</p>
    {action module='widgets' controller='listing' action='topSeller'}
{/block}