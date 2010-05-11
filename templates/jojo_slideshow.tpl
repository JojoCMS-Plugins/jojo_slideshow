{strip}<div id="{$slideshow.name}" style="width: {$slideshow.width|default:300}px; height: {$slideshow.height|default:200}px;" class="jojo_slideshow">
{foreach name=s from=$slideshows item=ss}
{if $smarty.foreach.s.first}
<img class="current" src="images/{$slideshow.width|default:300}x{$slideshow.height|default:200}/jojo_slideshowimages/{$ss.image}" alt="" title="{$ss.title}" />
{else}
<span rel="images/{$slideshow.width|default:300}x{$slideshow.height|default:200}/jojo_slideshowimages/{$ss.image}" title="{$ss.title}"></span>
{/if}
{/foreach}
</div>{/strip}
<script type="text/javascript">
$(jojo_slideshow('{$slideshow.name}',{$slideshow.delay},{$slideshow.fadespeed}));
</script>