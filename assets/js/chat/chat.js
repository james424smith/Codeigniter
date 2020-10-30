
var chat_reciver_id = "";
var chat_reciver_img_src = "";


$('.hidden-file').click(function() {
	$('#files').click();
 });


$("li").click(function(){
	// If this isn't already active
	//alert($(".self-img").val());
	if (!$(this).hasClass("active")) {
		// Remove the class from anything that is active
		$("li.active").removeClass("active");
		// And make this active
		$(this).addClass("active");
		chat_reciver_id = $(this).attr('class');
		chat_reciver_id = chat_reciver_id.replace(" active", "");

		var className_img = "img-" + $(this).attr('class');
		className_img = className_img.replace(" active", "");
		$(".select-img").attr("src", $("." + className_img).attr("src"));
		chat_reciver_img_src = $("." + className_img).attr("src");

		var className_username = "username-" + $(this).attr('class');
		className_username = className_username.replace(" active", "");
		$(".select-username").html($("." + className_username).html());

		$.post("/addChatMember",
		{
			receiver_id: $("#receiver_id").val()
		},
		function(res){
			
		});

		GetChatHistory(chat_reciver_id); 				
		ScrollDown();
	}
});
  
$(function() {
	$('.message').keypress(function(event) {
		var keycode = (event.keyCode ? event.keyCode : event.which);		
    	if(keycode == '13') {
			if(chat_reciver_id == "") {
				alert("Please select your partner..");
				$('.message').val('');
				$('.message').focus();
			}
			else
				sendTxtMessage($(this).val());
    }
});

$('.btnSend').click(function() {

	if(chat_reciver_id == "") {
		alert("Please select your partner..");
		$('.message').val('');
		$('.message').focus();
	}
	else 
    	sendTxtMessage($('.message').val());
});

$('.selectVendor').click(function(){
	ChatSection(1);
    var receiver_id = $(this).attr('id');
	//alert(receiver_id);
	$('#ReciverId_txt').val(receiver_id);
	$('#ReciverName_txt').html($(this).attr('title'));	  
	GetChatHistory(receiver_id); 				
});

$('.upload_attachmentfile').change( function(e) {
	
	var filename = e.target.files[0].name;
	var file_path = '<a href="../../../uploads/myattachments/' + filename + '" style="color:red;" >' + filename + '</a>';
	DisplayMessage(file_path);
	ScrollDown();
	var file_data = $('.upload_attachmentfile').prop('files')[0];
	 
    var form_data = new FormData();
    form_data.append('attachmentfile', file_data);
	form_data.append('type', 'Attachment');
	form_data.append('receiver_id', chat_reciver_id);
		  
	 $.ajax({
		type:"POST",    
		url:"/chat-attachment/upload",
		dataType:"json",
		cache:false,
		contentType:false,
		processData:false,
		data:form_data,
		success:function(result) {

		}
	 });
});

$('.ClearChat').click(function(){
       var receiver_id = $('#ReciverId_txt').val();
		$.ajax({
			//dataType : "json",
			url : 'chat-clear?receiver_id='+receiver_id,
			success : function(data) {
				GetChatHistory(receiver_id);		 
			},
			error : function (jqXHR, status, err) {
				// alert('Local error callback');
			}
		});
 				
	});

	$(".message").focus(function(){
		//alert(chat_reciver_id);
		if(chat_reciver_id == "")
			return;
		//alert($("#recive_id").val());
		$.post("/unreadmessage",
		{
			receiver_id: chat_reciver_id
		},
		function(res){
	
		});
	});

});	///end of jquery

function showUsers() {
	//var str = 
}

function ViewAttachment(message_id){

}

function ViewAttachmentImage(image_url,imageTitle){
	$('#modelTitle').html(imageTitle); 
	$('#modalImgs').attr('src',image_url);
	$('#myModalImg').modal('show');
}

function ChatSection(status){
	//chatSection
	if(status==0) {
		$('#chatSection :input').attr('disabled', true);
	} 
	else {
        $('#chatSection :input').removeAttr('disabled');
    }   
}
ChatSection(0);

function ScrollDown(){
	var elmnt = document.getElementById("content");
    var h = elmnt.scrollHeight;
   $('#content').animate({scrollTop: h}, 500);
}
window.onload = ScrollDown();

function DisplayMessage(message){

	var current_time = new Date().toLocaleString(); // for now
	var str = '<div class="d-flex justify-content-end mb-4">';
	str += '<div class="msg_cotainer_send">';
	str += message;
	str += '<div><span class="msg_time_send" style="width:150px; text-align: right; margin-right: 10px;">' + current_time + '</span></div>';
	str += '</div><div class="img_cont_msg">'; //23 Jan 2:05 pm
	str += '<img src="' + $(".self-img").val() + '" class="rounded-circle user_img_msg"></div></div>';
	$('#content').append(str);
}

function sendTxtMessage(message){
	//alert(chat_reciver_id);
	var messageTxt = message.trim();
	if(messageTxt != ''){
		DisplayMessage(messageTxt);
		 
		$.post("/send-message",
		{
			receiver_id: chat_reciver_id,
			messageTxt: messageTxt
		},
		function(res){
			$('#message').val("");
		});
	
		$('.message').val('');
		$('.message').focus();
	}
	else {
		$('.message').focus();
	}
	ScrollDown();
}

function GetChatHistory(receiver_id){

	$.get("/get-chat-history-vendor",
		{
			receiver_id: receiver_id,
		},
		function(data){
			var str = "";
			var chat_history = JSON.parse(data);
			$('#content').html(str);
			chat_history.forEach(element => {
				if(element['receiver_id'] == receiver_id) {
					str = '<div class="d-flex justify-content-end mb-4">';
					str += '<div class="msg_cotainer_send">';
					if(element['message'] == 'NULL' && element['attachment_name'] != "")
					{
						str += '<a href="../../../uploads/myattachments/' + element['attachment_name'] + '" style="color:red;" >' + element['attachment_name'] + '</a>'
					}
					else
					{
						str += element['message'];
					}
					str += '<span class="msg_time_send" style="width:150px; text-align: right; margin-right: 10px;">' + element['message_date_time'] + '</span>';
					str += '</div><div class="img_cont_msg">'; //23 Jan 2:05 pm
					str += '<img src="' + $(".self-img").val() + '" class="rounded-circle user_img_msg"></div></div>';
				}
				else if (element['sender_id'] == receiver_id)
				{
					str = '<div class="d-flex justify-content-start mb-4">';
					str += '<div class="img_cont_msg">';
					str += '<img src="' + chat_reciver_img_src + '" class="rounded-circle user_img_msg"></div>';
					str += '<div class="msg_cotainer">';
					if(element['message'] == 'NULL' && element['attachment_name'] != "")
					{
						if(element['read_status'] == 0)
							str += '<a href="../../../uploads/myattachments/' + element['attachment_name'] + '" style="color:#44e41c;" >' + element['attachment_name'] + '</a>'
						else
							str += '<a href="../../../uploads/myattachments/' + element['attachment_name'] + '" >' + element['attachment_name'] + '</a>'

					}
					else
					{
						if(element['read_status'] == 0)
						{
							str += '<span style="color:#44e41c;">' + element['message'] + '</span>';
						}
						else
						{
							str += '<span>' + element['message'] + '</span>';
						}
					}
					str += '<span class="msg_time" style="width:150px; margin-left: 10px;">' + element['message_date_time'] + '</span></div></div>';
				}
				$('#content').append(str);
			
			});
			
		});
}
setInterval(function(){ 
	if(chat_reciver_id != "") { 
		GetChatHistory(chat_reciver_id);}
}, 1000);
