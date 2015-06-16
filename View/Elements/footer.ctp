<?php
	$links = array(
		'Hlavní strana' => '/',
		'Řekli o výstavě' => '/o-vystave',
		'Galerie' => '/galerie',
		'Kontakt' => '/kontakt',
	);
?>
<div class="footer">
    <hr>
    <ul class="list-inline">
        <?php
            foreach ($links as $title => $url) {
                $link = $this->Html->link($title, $url);
                $options = array();
                echo $this->Html->tag('li', $link, $options);
            }
        ?>
    </ul>
    <hr>
</div>
