<?php
/**
 *
 *
 */

?>
<!-- Link Gitalk 的支持文件  -->

<div class="row">
<link rel="stylesheet" href="https://unpkg.com/gitalk/dist/gitalk.css">
<script src="https://unpkg.com/gitalk@latest/dist/gitalk.min.js"></script>
<div id="gitalk-container" class="" ></div>
<script type="text/javascript">
	var gitalk = new Gitalk({
        // gitalk的主要参数
        clientID: '0acdd483257d3c78bd54',
		clientSecret: '78bc5e954f84a4f9d1a8fc6f850489bbc8fd7369',
		repo: 'gittalk_repo',
		owner: 'the7s',
		admin: ['the7s'],
		id:"<?php the_ID(); ?>",
	});
	gitalk.render('gitalk-container');
</script>
</div>

<!-- Gitalk end -->