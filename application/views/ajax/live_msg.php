<ul class="list-group">
					<?php 
						if($uchat){
							foreach($uchat as $msg){
								if($msg->to_id==$user_id){
							?>	
							<li class="list-group-item" style="background:#D9EDF7"><i class="fa fa-user fa-fw fa-2x"></i><strong>Me</strong> <?php echo $msg->message?>
							<p><small><i class="fa fa-clock-o"></i> <?php echo timespan($msg->sent_at,time(),2);?> ago</small>	</p>
							</li>
							<?php	
							continue;
								}elseif($msg->from_id==$user_id){
								?>
								<li class="list-group-item" style="text-align:right"> <?php echo $msg->message?> <i class="fa fa-user fa-fw fa-2x"></i><strong><?php echo $this->lib->get_row('users','id',$msg->from_id,'name')?> </strong>
								<p><small><i class="fa fa-clock-o"></i> <?php echo timespan($msg->sent_at,time(),2);?> ago</small>	</p>
								</li>
								<?php
								}
							}
						}
					?>
					  
					</ul>