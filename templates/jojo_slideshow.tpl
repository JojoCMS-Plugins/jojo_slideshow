{strip}<div id="{$slideshow.name}" style="width: {$slideshow.width|default:300}px; height: {$slideshow.height|default:200}px;" class="jojo_slideshow">
{section name=s loop=$slideshows}
{if $smarty.section.s.first}
  <img class="current" src="images/{$slideshow.width|default:300}x{$slideshow.height|default:200}/jojo_slideshowimages/{$slideshows[s].image}" alt="" title="{$slideshows[s].title}" />
{else}
  <span rel="images/{$slideshow.width|default:300}x{$slideshow.height|default:200}/jojo_slideshowimages/{$slideshows[s].image}" title="{$slideshows[s].title}"></span>
{/if}
{/section}
</div>{/strip}
<script type="text/javascript">
$(jojo_slideshow('{$slideshow.name}',{$slideshow.delay},{$slideshow.fadespeed}));
</script>