<?php get_header(); ?>
    <div class="content_hold">
    	<div class="content">
        	<div class="main">
            
              <!--选择分类-->
         <div class="select clearfix">
                	<div class="pb_avatar">
                    	<a href="#">Rming</a>
                        <span class="author">Rming</span>
                    </div>
                    
                    <div class="select_hold">
                        <div class="select_hold_left"></div>
                        <div class="select_area">
                            <ul class="clearfix">
                               <li><a class="music" href="/music">音乐</a></li>
                                <li><a class="photo" href="/pic">图片</a></li>
                                <li><a class="video" href="/film">电影</a></li>
                                <li><a class="sdut" href="/article">原创</a></li>
                                <li><a class="www" href="/others">小站</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
          


<!-- Blog Post -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <!--article_start-->
				<div class="list">
                    <div class="pb_avatar pb_author">
                      <?php echo get_avatar( get_the_author_email(), 65 ); ?>
                       
                         <span class="author"><?php the_author_posts_link(); ?></span>
                    </div>
                    
                    <div class="list_hold ">
                        <div class="list_hold_left"></div>
                        <div class="link-to-post-holder" ><a href="<?php the_permalink(); ?>" rel="nofollow" class="link-to-post">查看文章</a></div>
                        <div class="pop-content clearfix">
                        	<div class="list-hd">
                                <div class="list-basic"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></div>
                                <div class="list-actions"   >
<table width="130" height="27" border="0">
  <tr height="30" width="130">
    <td height="30" width="60"><a class="action-item list-rt"  href="#">转载&nbsp;</a></td>
    <td height="30" width="60"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></td>
  </tr>
</table>
					
                             <!--   <a class="action-item list-rt"  href="#">转载&nbsp;</a>
                                <div id="vote" class="action-item i-favo" style="background:none;"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div> --> 
                           

                                   <!-- <a class="action-item list-rt"  href="#">转载&nbsp;</a>
                                    <a title="喜欢" class="action-item i-favo " href="#">喜欢</a>-->
                                </div>
                            </div>
							<div class="list-bd">
                                <div class="list-ct ">
                                    <?php the_content('阅读全文...'); ?>

                                </div>
                                <div class="list_tags">标签：<?php the_tags('#', '# #', '#'); ?></div>
                                <div class="list-act">
                                	<?php edit_post_link('编辑', '', '&nbsp;'); ?>
                                    <?php comments_popup_link('回应', '回应', '回应', 'list-cmt', ''); ?>
                                   <?php comments_popup_link('热度(0)', '热度(1)', '热度(%)', 'list-nt', '热度(-273℃)'); ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
       			<!--article_end-->
                
                <!-- 没有相关文章-->
                 <?php else : ?>
                   <div class="list">
                        <div class="list_hold ">
                            <div class="pop-content clearfix">
                                <div class="list-hd" style="height:23px;">
                              	没有发现相关内容，请访问其他内容。
                                </div>
                                <div class="list-bd" style="padding:1px  0px ;">
                                    <div class="list-ct ">
                                    </div>
                                    <div class="list-act">                                  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php comments_template(); ?>	

                
			</div>
            <!--main_end-->
         <?php get_sidebar(); ?>
            
		</div>
	</div>
</div>
<!--end wrapper-->
<?php get_footer(); ?>