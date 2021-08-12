<?php 
	include_once("header.php");
 ?>

	<section>
		<div class="gap gray-bg mt-3">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-1">
							
							</div><!-- sidebar -->
							<div class="col-lg-8">
								<div class="loadMore">
									<div class="central-meta item">
										<div class="new-postbox">
											<figure>
												<img src='<?php print($_SESSION["user"]["img"]) ?>'>
											</figure>
											<div class="newpst-input">
												<form method="post" action="server.php">
													<input type="hidden" name="action" value="status">
													<textarea class="status_text" rows="2" placeholder="write something" name="status_text"></textarea>
													<div class="attachments">
														<ul>
															
															<li>
																<div class="add-smiles" style="top: 106px; right: 13%;">
																	<span>	&#128513;</span>
																</div>
																<div class="smiles-bunch" style="top: 31px; right: 12%;">
																	<span class="status_smile">	&#128525;</span>
																		<span class="status_smile">&#128512;</span>
																	<span class="status_smile">	&#128514;</span>
																	<span class="status_smile">&#128515;</span>
																	<span class="status_smile">	&#128520;</span>
																	<span class="status_smile">	&#128523;</span>
																	<span class="status_smile">&#128526;</span>
																	<span class="status_smile">	&#128536;</span>
																	<span class="status_smile">&#128549;</span>
																	<span class="status_smile">&#128552;</span>
																	<span class="status_smile">		&#128557;</span>
																	<span class="status_smile">		&#129298;</span>
																</div>
																<button type="submit">Publish</button>
															</li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div><!-- add post new box -->

								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget friend-list stick-widget">
										<h4 class="widget-title">Friends</h4>
										<div id="searchDir"></div>
										<ul id="people-list" class="friendz-list">
											<li>
												<figure>
													<img src="images/resources/friend-avatar.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">bucky barnes</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6b1afa8b2a3b4b5a9aaa2a3b486a1aba7afaae8a5a9ab">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82e0e3f0ece7f1c2e5efe3ebeeace1edef">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar3.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">jason borne</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6f050e1c00010d2f08020e0603410c0002">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/resources/friend-avatar4.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Cameron diaz</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="147e75677b7a76547379757d783a777b79">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640e05170b0a06240309050d084a070b09">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar6.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">andrew</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d3b9b2a0bcbdb193b4beb2babffdb0bcbe">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar7.jpg" alt="">
													<span class="status f-off"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">amy watson</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="deb4bfadb1b0bc9eb9b3bfb7b2f0bdb1b3">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar5.jpg" alt="">
													<span class="status f-online"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">daniel warber</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bbd1dac8d4d5d9fbdcd6dad2d795d8d4d6">[email&#160;protected]</a></i>
												</div>
											</li>
											<li>
												
												<figure>
													<img src="images/resources/friend-avatar2.jpg" alt="">
													<span class="status f-away"></span>
												</figure>
												<div class="friendz-meta">
													<a href="time-line.html">Sarah Loren</a>
													<i><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ff9d9e8d919a8cbf98929e9693d19c9092">[email&#160;protected]</a></i>
												</div>
											</li>
										</ul>
										<div class="chat-box">
											<div class="chat-head">
												<span class="status f-online"></span>
												<h6>Bucky Barnes</h6>
												<div class="more">
													<span><i class="ti-more-alt"></i></span>
													<span class="close-mesage"><i class="ti-close"></i></span>
												</div>
											</div>
											<div class="chat-list">
												<ul>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="you">
														<div class="chat-thumb"><img src="images/resources/chatlist2.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
													<li class="me">
														<div class="chat-thumb"><img src="images/resources/chatlist1.jpg" alt=""></div>
														<div class="notification-event">
															<span class="chat-message-item">
																Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks
															</span>
															<span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time></span>
														</div>
													</li>
												</ul>
												<form class="text-box">
													<textarea placeholder="Post enter to post..."></textarea>
													<div class="add-smiles">
														<span title="add icon" class="em em-expressionless"></span>
													</div>
													<div class="smiles-bunch">
														<i class="em em---1"></i>
														<i class="em em-smiley"></i>
														<i class="em em-anguished"></i>
														<i class="em em-laughing"></i>
														<i class="em em-angry"></i>
														<i class="em em-astonished"></i>
														<i class="em em-blush"></i>
														<i class="em em-disappointed"></i>
														<i class="em em-worried"></i>
														<i class="em em-kissing_heart"></i>
														<i class="em em-rage"></i>
														<i class="em em-stuck_out_tongue"></i>
													</div>
													<button type="submit"></button>
												</form>
											</div>
										</div>
									</div><!-- friends list sidebar -->
								</aside>
							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>


</div>
	<div class="side-panel">
			<h4 class="panel-title">General Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>use night mode</span>
					<input type="checkbox" id="nightmode1"/> 
					<label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notifications</span>
					<input type="checkbox" id="switch22" /> 
					<label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Notification sound</span>
					<input type="checkbox" id="switch33" /> 
					<label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>My profile</span>
					<input type="checkbox" id="switch44" /> 
					<label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show profile</span>
					<input type="checkbox" id="switch55" /> 
					<label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
			<h4 class="panel-title">Account Setting</h4>
			<form method="post">
				<div class="setting-row">
					<span>Sub users</span>
					<input type="checkbox" id="switch66" /> 
					<label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>personal account</span>
					<input type="checkbox" id="switch77" /> 
					<label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Business account</span>
					<input type="checkbox" id="switch88" /> 
					<label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Show me online</span>
					<input type="checkbox" id="switch99" /> 
					<label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Delete history</span>
					<input type="checkbox" id="switch101" /> 
					<label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
				</div>
				<div class="setting-row">
					<span>Expose author name</span>
					<input type="checkbox" id="switch111" /> 
					<label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
				</div>
			</form>
		</div><!-- side panel -->		
	
	<script src="js1/main.min.js"></script>
	<script src="js1/script.js"></script>
	<script src="js1/map-init.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	
<script>
	$(document).on("click",".status_smile",function() {
		var smile=$(this).text()
		var old_text=$(".status_text").val()
		$(".status_text").val(old_text+smile)
	})	
	$(document).on("click",".com_smile",function() {
		var smile=$(this).text()
		var old_text=$(".com_text").val()
		$(".com_text").val(old_text+smile)
	})

	function my_status(){
		$.ajax({
  			url:'server.php',
  			type:'post',
  			data:{action:'my_status'},
  			success:(r)=>{
  			 r=JSON.parse(r)
  			 for (var i = 0; i <= r.length-1; i++) {
  			 console.log(r[i])
  			 if(r[i][0]==null){
  			 	r[i][0]=0
  			 }  			 
  			 if(r[i][1]==null){
  			 	r[i][1]=0
  			 }
  				$(".loadMore").append(`
									<div class="central-meta item">
										<div class="user-post">
											<div class="friend-info">
												<figure>
													<img src='<?php print($_SESSION["user"]["img"]) ?>'>
												</figure>
												<div class="friend-name">
													<ins><a href="time-line.html" title=""><?php print($_SESSION["user"]["name"]) ?></a></ins>
												</div>
												<div class="description container px-5">
														
														<p class="px-5">
															${r[i]["text"]}
														</p>
													</div>
													
													<div class="we-video-info">
														<ul class="ml-5">
															<li status_id="${r[i]["id"]}" class="this_status_com">
																<span class="comment" data-toggle="tooltip" title="Comments">
																	<i style="font-size: 20px;" class="fa fa-comments-o"></i>
																</span>
															</li>
															<li  status_id="${r[i]["id"]}" class="this_status_like">
																<span class="like" data-toggle="tooltip" title="like">
																	<i class="ti-heart"></i>
																	<ins>${r[i][0]}</ins>
																</span>
															</li>
															<li status_id="${r[i]["id"]}" class="this_status_dislike">
																<span class="dislike" data-toggle="tooltip" title="dislike">
																	<i class="ti-heart-broken"></i>
																	<ins>${r[i][1]}</ins>
																</span>
															</li>
															<li>
																
																 <i style="    font-size: 19px;" class="text-dark fa fa-edit"></i>
																 
																<li status_id="${r[i]["id"]}" class="this_status_delete">
																<span class="delete" data-toggle="tooltip" title="Delete">
																	<i style="    font-size: 21px;" class="fa fa-trash"></i>
																</span>
															</li>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

  				`)
  			 }

  			}

 		})
	}

	my_status()

	$(document).on("click",".this_status_dislike",function() {
		var status_id=$(this).attr("status_id")
		$.ajax({
  			url:'server.php',
  			type:'post',
  			data:{action:'this_status_dislike',status_id:status_id},
  			success:(r)=>{
  			 r=JSON.parse(r)
  			 $(this).find("ins").text(r[1][0]["dislike_count"])
  			 $(this).parent().find(".like").find("ins").text(r[0][0]["like_count"])
  			}

 		})

    	
	});


	$(document).on("click",".this_status_like",function() {
		var status_id=$(this).attr("status_id")
		$.ajax({
  			url:'server.php',
  			type:'post',
  			data:{action:'this_status_like',status_id:status_id},
  			success:(r)=>{
  			 r=JSON.parse(r)
  			 $(this).find("ins").text(r[0][0]["like_count"])
  			 console.log( r[1][0]["like_count"])
  			 $(this).parent().find(".dislike").find("ins").text(r[1][0]["dislike_count"])
  			}

 		})

	});
	$(document).on("click",".this_status_delete",function() {
		var status_id=$(this).attr("status_id")
		$.ajax({
  			url:'server.php',
  			type:'post',
  			data:{action:'this_status_delete',status_id:status_id},
  			success:(r)=>{
  			 r=JSON.parse(r)
  			}

 		})

	});

$(document).on("click",".this_status_com",function() {
		var status_id=$(this).attr("status_id")
		$(".coment-area").remove()
		$.ajax({
  			url:'server.php',
  			type:'post',
  			data:{action:'this_status_com',status_id:status_id},
  			success:(r)=>{
  			 r=JSON.parse(r)
  			 console.log(r)
  			 $(this).parent().before(`
  			 								<div class="coment-area">
												<ul class="we-comet">
													<li class="post-comment">
														<div style="width:3%" class="comet-avatar">
															<img src='<?php print($_SESSION["user"]["img"]) ?>' alt="">
														</div>
														<div class="post-comt-box">
															<form method="post" action="server.php">
															<input type="hidden" name="action" value="add_com">
																<textarea class="com_text" name="com_text" placeholder="Post your comment"></textarea>
																<ul>
															
															<li>
																<div class="add-smiles" style="top: 22px; right:3%;">
																	<span>	&#128513;</span>
																</div>
																<div class="smiles-bunch" style="top: 31px; right: 12%;">
																	<span class="com_smile">	&#128525;</span>
																		<span class="com_smile">&#128512;</span>
																	<span class="com_smile">	&#128514;</span>
																	<span class="com_smile">&#128515;</span>
																	<span class="com_smile">	&#128520;</span>
																	<span class="com_smile">	&#128523;</span>
																	<span class="com_smile">&#128526;</span>
																	<span class="com_smile">	&#128536;</span>
																	<span class="com_smile">&#128549;</span>
																	<span class="com_smile">&#128552;</span>
																	<span class="com_smile">		&#128557;</span>
																	<span class="com_smile">		&#129298;</span>
																</div>
																<input type="hidden" name="status_id" value="${status_id}">
																<button  style="color: #c51def;bottom: 30px;" type="submit"><i class="fa fa-paper-plane"></i></button>
															</li>
														</ul>
															</form>	
														</div>
													</li>
												</ul>
											</div>
  			 	`)

  			 for(let i=0; i<=r.length-1;i++){
  			 	$(".post-comment").before(`
  			 		<li>
						<div style="width: 3.6%;" class="comet-avatar">
						<img src='${r[i]["img"]}'>
									</div>
									<div style="left:13px" class="we-comment">
										<div class="coment-head">
											<h5><a href="time-line.html" title="">${r[i]["name"]}</a></h5>
										</div>
										<p>${r[i]["comment"]}</p>
									</div>
					</li>
  			 		`)
	  			 }
  			}

 		})


})
    	
</script>
</html>
