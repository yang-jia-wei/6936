function ajax_load(path){
  var htmls;
  $.ajax({
  type: "post",
  url: path,
  data: '',
  async:false,
  dataType:"html",
  success: function(html){
    htmls=html;
  }
  });
  return htmls;
}


function link_login(){
  var username = $.trim($("input[name='username']").val()); 
  var password = $.trim($("input[name='password']").val()); 
  var code = $.trim($("input[name='code']").val());


   if(!username){
    alert('请输入用户名');
    return false;
   } 
   if(!password){
    alert('请输入用密码');
    return false;
   } 
   if(code){
      var htm = ajax_load('admin.php?m=Index&a=code&verify='+code);

      if(htm==1){
      alert('验证码错误');
      return false;         
      }
   }else{
    alert('请输入验证码');
    return false;    
   }


   $.post('admin.php?m=login&a=login_save',{
        username:username,
        password:password
   },function(data){

          if(data=='success'){
           location.href="admin.php?m=classify&a=index&admin_classify_id=3";
          }else{
           alert('帐号密码错误');
          }      
   })    
         

}