<?php
 get_header();
?>
<?=
    the_title();
?>
<div class="red">cuongnd1</div>

<?=
    the_content();
?>

<ol class="commentlist">
	<?php
		$comments = get_comments(array(
			'status' => 'approve' 
		));

		wp_list_comments(array(
			'per_page' => 10,
			'reverse_top_level' => false
		), $comments);
	?>
</ol>

<?php

    comment_form();

?>