jojo_slideshow
==============
A javascript / jQuery based image slideshow. For use within content and for page headers etc.
This Jojo plugin gives an admin interface for editing slideshows and uploading images. Once a
slideshow is in the database, they can be inserted into any HTML / BB Code field using a content
variable.
They can also be manually coded into page templates without using the database if required.
If driven by the database, images will be resized automatically to fit the dimensions specified.
Captions can be added optionally, and overall look and feel can be altered by overriding the css.

To insert into a content section
================================
Add the following code anywhere in a HTML or BB Code field.

[[slideshow:name-of-slideshow]]

where "name-of-slideshow" is the unique name given previously to the slideshow in the database.

To insert manually into a page
==============================

<!-- Add this to the body of your template -->

<div id="myslideshow" class="jojo_slideshow">
<img style="" class="current" src="images/700x100/ss1.jpg" alt="" title="image 1" />
<span rel="images/700x100/ss2.jpg" title="image 2"></span>
<span rel="images/700x100/ss3.jpg"></span>
<span rel="images/700x100/ss4.jpg" title="This is a really long title that may end up going on 2 lines"></span>
<span rel="images/700x100/ss5.jpg" title="image 5"></span>
</div>

This is a div with a class of 'jojo_slideshow' an ID of your choosing surrounding the images you want in the
slideshow. Only the first image is inserted as an <img> tag, so it displays immediately and becomes the default
for non-javascript browsers. The other images are rendered as spans, with the link to the image in the 'rel'
attribute and the caption in the title attribute (otpional). This was done as a workaround to prevent IE from preloading
the hidden images immediately, which slowed the page down significantly.
You must specify a height and width for the containing div either in the css or as a style attribute eg...

<!-- Add this to your CSS file -->
div#myslideshow {
  width: 700px;
  height: 100px;
}

<!-- Add this to the head of your template -->

<script type="text/javascript">
$(jojo_slideshow('myslideshow',5000,500));
</script>

The first argument is the ID of the div surrounding your slideshow. The second argument is the delay
in ms between images (5000ms = 5 seconds), or leave blank for default. The third argument is the speed
of the transition in ms, usually 250 - 1000ms is a good number. Or use the jQuery constants 'slow',
'normal', 'fast'.