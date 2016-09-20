<?php       $word_t17=get_option('mytheme_word_t17');
			$word_t18=get_option('mytheme_word_t18');
			$word_t19=get_option('mytheme_word_t19');
			$word_t20=get_option('mytheme_word_t20');
			$word_t21=get_option('mytheme_word_t21');
			$word_t22=get_option('mytheme_word_t22'); ?>

<div class="themepark_commont" id="themepark_commont">
<b class="themepark_comment_title"><?php echo get_option('themepark_comment_title'); ?></b>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal" role="form">
			<div class="liuy3 form-group">
                <label class="liuy2 col-sm-2 control-label" for="author"><?php if($word_t17!=""){echo $word_t17;}else{echo '姓 名';}  ?></label>
				<div class="col-sm-10">
				 	<input type="text" name="author" class="form-control" id="author" value="<?php echo esc_attr($comment_author); ?>" size="28" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>
			</div>
			<div class="liuy3 form-group">
                <label class="liuy2 col-sm-2 control-label" for="email"><?php if($word_t19!=""){echo $word_t19;}else{echo '邮 箱 ';}  ?></label>
				<div class="col-sm-10">
					<input type="text" name="email" id="email" class="form-control" value="<?php echo esc_attr($comment_author_email); ?>" size="28" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>
			</div>

	<?php $themepark_comment_code_d = get_option('themepark_comment_code');
	       if($themepark_comment_code_d){
		   		$arraylist=split("\n",$themepark_comment_code_d); 
	
	 			foreach ($arraylist as $a)
                {
					 $arraylist3=  split("\|",$a); 
					  $arraylist4=  split(",",$arraylist3[3]);    
				
						
						$tap.= '<div class="liuy3 form-group"> <label class="liuy2 col-sm-2 control-label" for="'.$arraylist3[2].'" >'.$arraylist3[1].'</label><div  class="col-sm-10">' ;
						
						if($arraylist3[0]=="select"){$tap.= '<select id="'.$arraylist3[2].'" class="form-control" name="'.$arraylist3[2].'">'; 
	                           for($i=0;$i<count($arraylist4);$i++)  {
								  $tap.='<option value ="'.$arraylist4[$i].'" >'.$arraylist4[$i].'</option>' ;
								  }
						$tap.= '</select>';
						}  elseif($arraylist3[0]=="radio"){
							for($i=0;$i<count($arraylist4);$i++) 
	                          {
								  $tap.='  <input type="radio" class="themepark_radio" name="'.$arraylist3[2].'" class="form-control" value="'.$arraylist4[$i].'" id="radio'.$i.'" />'.$arraylist4[$i].'</label>' ;
								  }
							
							}
							elseif($arraylist3[0]=="datetimepicker"){
							for($i=0;$i<count($arraylist4);$i++) 
	                          {
								  $tap.=' <input type="text" name="'.$arraylist3[2].'" id="datetimepicker"  class="datetimepicker"value="" size="28" tabindex="2" />' ;
								  }
							
							}
							
							
							else{$tap.= '<input type="text" class="form-control" name="'.$arraylist3[2].'" id="'.$arraylist3[2].'" value="" size="28" tabindex="2" />'; }
						
						 $tap.='</div></div>'; 
						 
						
						
						
					 }
					
					  echo $tap;
				 
				} 
	
	
	 ?>
		<div class="liuy3 form-group">
            <label class="liuy2 col-sm-2 control-label" for="comment"><?php if($word_t21!=""){echo $word_t21;}else{echo '需求描述:';}  ?></label>
			<div class="col-sm-10">
				<textarea name="comment" class="form-control" id="comment" cols="58" rows="10" tabindex="4"></textarea>
				<p>业务员收到您的信息后，将会尽快联系您，请您耐心等待。</p>
			</div>
		</div>
		<input type="hidden" name="redirect_to" value="<?php echo get_permalink(); ?>" />
		<div class="liuy3">
          <div class="liuy2"></div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="<?php if($word_t22!=""){echo $word_t22;}else{echo '提  交';}  ?>" />
			<?php comment_id_fields(); ?>
		</div>
		
        <div class="liuy3">
          <div class="liuy2"></div>
				<!--<p></p>-->
		
		</div>
        <?php if(trim($_GET['commentys'])){ ?>
        <script>
        alert('提交成功');
        </script>
	
		<?php } do_action('comment_form', $post->ID); ?>

	</form>
    <link rel="stylesheet" href="<?php  echo plugins_url( 'jquery.datetimepicker.css' , __FILE__ ); ?>" type="text/css" />
  	<script type='text/javascript' src='<?php  echo plugins_url( 'jquery.datetimepicker.js' , __FILE__ ); ?>'></script>  
    <script>
    $(function(){
		$(".datetimepicker").datetimepicker({
		  format:'Y年m月d日',
		  timepicker:false
		 });

		});
    </script>
    </div>

