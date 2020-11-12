<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php $this->load->view('common/header');
   if(isset($_POST['submit']))
   {
      $name = $_POST['search_name'];
      //var_dump($name);
   }
   $obj = &get_instance();
   $obj->load->model('ChatModel');

   //var_dump($vendorslist);die();

?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/Front/css/custom.css')?>">

<style>
   
   .badge_5 {
		position: absolute;
		font-size: 100%;
		border-radius: 50%;
		background-color: red;
		color: white;
		padding-left: 6px;
		padding-right: 5px;
		margin-top: 2px;
		margin-left: 2px;
		font-weight: bolder;
      margin-left: 60px;
  }
   .fileDiv {
   position: relative;
   overflow: hidden;
   }
   .upload_attachmentfile {
   position: absolute;
   opacity: 0;
   right: 0;
   top: 0;
   }
   .btnFileOpen {margin-top: -50px; }
   .direct-chat-warning .right>.direct-chat-text {
   background: #d2d6de;
   border-color: #d2d6de;
   color: #444;
   text-align: right;
   }
   .direct-chat-primary .right>.direct-chat-text {
   background: #3c8dbc;
   border-color: #3c8dbc;
   color: #fff;
   text-align: right;
   }
   .spiner{}
   .spiner .fa-spin { font-size:24px;}
   .attachmentImgCls{ width:450px; margin-left: -25px; cursor:pointer; }
</style>
<?php $this->load->view('common/sidebar');?>
<div class="main-panel">
   <div class="content">
      <div class="container-fluid">
            <div class="row" style="margin-top:90px;">
               <div class="col-md-6">
                     <!-- USERS LIST -->
                     <div class="box box-danger" style="height:500px;">
                        <div class="box-header with-border">
                           <h3 class="box-title" style="font-size:20px;"><?=$strTitle;?></h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                           <form name="search_user" method="post">
                              <input type="text" name="search_name" placeholder="Search">
                              <input type="submit" name="submit" value="submit" style="display:none;">

                              <input type="hidden" id="is_unread" value="false" />
                              <input type="button" name="unread" class="btn btn-info unread" value="UnRead" style="float:right; margin-right:10px;">
                              <!--<a href="<?php echo base_url();?>chat">Reset</a>-->
                           </form>

                           <hr>
                           <input type="hidden" class="self-img" value="<?php echo base_url('uploads/profiles/' . $self->picture_url);  ?>" >
                           <ul class="users-list clearfix">
                                 <?php if(!empty($vendorslist)){
                                          foreach($vendorslist as $v):
                                             if($name)
                                             {
                                                if($v['id'] != $this->session->userdata('admin_id') && ($v['username'] == $name || $v['name'] == $name || $v['email'] == $name))
                                                {
                                 ?>

                                       <li class="selectVendor" id="<?=$v['id'];?>" title="<?=$v['username'];?>">
                                          <?php
                                             $unread_msg_count = $obj->ChatModel->getUnReadMsgCountWithAdmin($v['id']);
                                             if($unread_msg_count > 0) {
                                          ?>
                                             <span class="badge_5" id="unread_msg<?=$v['id']?>"><?=$unread_msg_count?></span>
                                          <?php }?>
                                          <img src="<?=$v['picture_url'];?>" alt="<?=$v['username'];?>" title="<?=$v['username'];?>">
                                          <a class="users-list-name" href="#">
                                             <?php if($v['highlight'] == 1) { echo "<span></span>"; } ?>
                                             <?=$v['username'];?>
                                          </a>
                                          
                                          <!--<span class="users-list-date">Yesterday</span>-->
                                       </li>

                                 <?php } }
                                 else if ($v['id'] != $this->session->userdata('admin_id')){ ?>
                                 <li class="selectVendor" id="<?=$v['id'];?>" title="<?=$v['username'];?>">
                                       <?php
                                             $unread_msg_count = $obj->ChatModel->getUnReadMsgCountWithAdmin($v['id']);
                                             if($unread_msg_count > 0) {
                                       ?>
                                          <span class="badge_5" id="unread_msg<?=$v['id']?>"><?=$unread_msg_count?></span>
                                       <?php }?>
                                    <img src="<?=$v['picture_url'];?>" alt="<?=$v['username'];?>" title="<?=$v['username'];?>">
                                    <input type="hidden" id="<?php echo 'img_' . $v['id'];?>" value="<?=$v['picture_url'];?>">
                                    <a class="users-list-name" href="#">
                                       <?php if($v['highlight'] == 1) { echo "<span></span>"; } ?>
                                       <?=$v['username'];?>
                                    </a>
                                 <!--<span class="users-list-date">Yesterday</span>-->
                                 </li>
                                 <?php }
                                 ?>
                              <?php endforeach;?>
                              <?php } else{?>
                              <li>
                                 <a class="users-list-name" href="#">No Heelper's Find...</a>
                              </li>
                              <?php } ?>
                           </ul>
                           <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!--/.box -->
               </div>
               <div class="col-md-6" id="chatSection" >
                  <!-- DIRECT CHAT -->
                  <div class="box box-warning direct-chat direct-chat-primary">
                     <div class="box-header">
                        <h4 class="box-title" id="ReciverName_txt" style="font-size:20px;"><?=$chatTitle;?></h4>
                        <div class="box-tools pull-right">
                           <span data-toggle="tooltip" title="Clear Chat" class="ClearChat"><i class="fa fa-comments"></i></span>
                        </div>
                     </div>
                     <!-- /.box-header -->
                     <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages" id="content" style="height:350px;">
                           <!-- /.direct-chat-msg -->
                           <div id="dumppy">                           
                           </div>
                        </div>
                        <!--/.direct-chat-messages-->
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer" style="margin-top:50px">
                        <!--<form action="#" method="post">-->
                        <div class="input-group">
                           <?php
                              $obj = &get_instance();
                              $obj->load->model('UserModel');
                              $profile_url = $obj->UserModel->PictureUrl();
                              $user = $obj->UserModel->GetUserData();
                           ?>
                           <input type="hidden" id="Sender_Name" value="<?=$user['name'];?>">
                           <input type="hidden" id="Sender_ProfilePic" value="<?=$profile_url;?>">
                           <input type="hidden" id="ReciverId_txt">
                           <textarea name="" class="form-control message" placeholder="Type the message ..." id="message"></textarea>
                           <span class="input-group-btn">
                              <button type="button" class="btn btn-success btn-flat btnSend" id="nav_down" style="margin-top:5px;">Send</button>
                              <div class="fileDiv btn btn-info btn-flat" style="margin-top:5px;"> <i class="fa fa-upload"></i> 
                                 <input type="file" name="file" class="upload_attachmentfile"/>
                              </div>
                           </span>
                        </div>
                        <!--</form>-->
                     </div>
                     <!-- /.box-footer-->
                  </div>
                  <!--/.direct-chat -->
               </div>
            </div>
      </div>
   </div>
</div>
<script src="<?php echo base_url('assets/js/chat/admin_chat.js');?>"></script>
<!-- Modal -->
<?php $this->load->view('common/footer');?>
<script>
   $(".unread").click(function(){
      if($("#is_unread").val() == 'false')
      {
         $('.users-list > li').each(function(){
            var isUnread = false;
            if($(this).has('span').length)
            {   
               isUnread = true;
            }
            $(this).toggle(isUnread);
         });
         $(".unread").val('All Users');
         $("#is_unread").val('true'); 
      }
      else
      {
         $('.users-list > li').each(function(){
            $(this).toggle(true);
         });
         $(".unread").val('UnRead');
         $("#is_unread").val('false');
      }
      
          
   });
</script>