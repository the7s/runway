<?php
/**
 *
 *
 */

?>
<!-- Link Gitalk 的支持文件  -->
<link rel="stylesheet" href="https://unpkg.com/gitalk/dist/gitalk.css">
<script src="https://unpkg.com/gitalk@latest/dist/gitalk.min.js"></script>


<div id="gitalk-container" class="" ></div>
<script type="text/javascript">
	var gitalk = new Gitalk({// gitalk的主要参数clientID: '复制刚才生成的clientID',
		clientSecret: '复制刚才生成的clientSecret',
		repo: '自己博客的地址',
		owner: 'GitHub的用户名',
		admin: ['Github的用户名'],
		id:window.location.pathname,
	});
	gitalk.render('gitalk-container');
</script>

<!-- Gitalk end -->