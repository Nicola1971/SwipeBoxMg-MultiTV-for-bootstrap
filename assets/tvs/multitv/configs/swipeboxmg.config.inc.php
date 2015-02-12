<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
'image' => array(
'caption' => 'Image',
'type' => 'image'
),
'thumb' => array(
'caption' => 'Thumbnail',
'type' => 'thumb',
'thumbof' => 'image'
),
'title' => array(
'caption' => 'Title',
'type' => 'text'
),
);
$settings['templates'] = array(
'outerTpl' => ' <div class="row margin-bottom-20">
<h1 class="page-header">[*longtitle*]</h1>
[+wrapper+]</div>',
'rowTpl' => '<div class="col-md-3 col-sm-6 thumb">
<a class="thumbnail" rel="gallerysw" title="[+title+]" href="[+image+]"><img class="img-responsive" src="[!phpthumb? &input=`[+image+]` &options=`w=400,h=300,zc=TL`!]" alt="[+title+]" title="[+title+]" /></a>
</div>
')
?>