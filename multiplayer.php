<?php
/*
Template Name: Chat Room
 */

get_header();?>


<style type="text/css">
  #chat-output {
      height: 400px;
      overflow-y: scroll;
      background: #27263c;
    }
    .alert-info {
    color: white;
    background-color: #fe6601;
    border: 2px solid #fe6601;
}
.br0{border-radius:0;}
.bordorange{border: 2px solid #fe6601;}
    .ptandb4p{padding-top:2%; padding-bottom:2%;}
    .padbothead2p{padding-bottom:4%;}
    .fs25chat{font-size:25px;}
    .fs30chat{font-size:30px;}
    .fs20chat{font-size:20px;}
    .buttonchat{background: #fe6601; color: white;}
    .list-group-item{color: white;
background: #27263c;
border: 2px solid #fe6601; margin:10px;}
#online-users li{margin-top:0; margin-left:0px; margin-right:0px; margin-bottom:10px;}
.list-group-item strong{font-family: 'Architects Daughter', cursive;}
</style>


<section>
  <div class="container pad0all">
    <img src="https://tenderminds.live/wp-content/uploads/2021/09/chatroomblue.jpg" class="h600px" alt="Homepage banner" width="100%">
    <!--<div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="height: 700px;background: black;">
        <p style="color:white; font-weight:700" class="aven-book">BANNER</p>
      </div>
    </div>-->
    <p class="centertext tacenter textforbluebannertext">Chat with others around the world!</p>
  </div>
</section>

<section class="ptandb4p chatroomback">
<section class="">
  <div class="container padbothead2p">
    <p class="pforvideos wow fadeInLeft"><u>Chat with other kids!</u></p>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
        <div class="col-12 col-sm-12 col-md-10 col-lg-10">
            <p class="chila fs14mobile wow fadeInDown fs20pxmainblock tacenter">Conversation skills are important for your development and wellbeing. That's because being able to have conversations helps children make friends, be listened to, ask for what they need and develop strong relationships with others. Conversation skills are about being able to talk and listen well.</p>
        </div>
    <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
    </div>
  </div>
</section> 

<section class="chatroompad6p">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-info archfont fs25chat">You are <strong class="archfont fs30chat" id="whoami"></strong></div>
      <div class="panel panel-default">
        <div class="panel-heading ultra fs20chat">Online Users</div>
        <div class="list-group archfont fs20chat" id="online-users"></div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading ultra fs20chat">Live Chat</div>
        <ul class="list-group chila" id="chat-output"></ul>
        <div class="panel-body chila">
          <form id="chat">
            <div class="input-group chila">
              <input type="text" class="form-control chila bordorange br0" id="chat-input"/>
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default archfont buttonchat br0">Send Message</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</section>


<script type="text/javascript">
 var randomName = function() {
  
  var animals = ['pigeon', 'seagull', 'bat', 'owl', 'sparrows', 'robin', 'bluebird', 'cardinal', 'hawk', 'fish', 'shrimp', 'frog', 'whale', 'shark', 'eel', 'seal', 'lobster', 'octopus', 'mole', 'shrew', 'rabbit', 'chipmunk', 'armadillo', 'dog', 'cat', 'lynx', 'mouse', 'lion', 'moose', 'horse', 'deer', 'raccoon', 'zebra', 'goat', 'cow', 'pig', 'tiger', 'wolf', 'pony', 'antelope', 'buffalo', 'camel', 'donkey', 'elk', 'fox', 'monkey', 'gazelle', 'impala', 'jaguar', 'leopard', 'lemur', 'yak', 'elephant', 'giraffe', 'hippopotamus', 'rhinoceros', 'grizzlybear','lioness','peahen']

  var colors = ['silver', 'gray', 'black', 'red', 'maroon', 'olive', 'lime', 'green', 'teal', 'blue', 'navy', 'fuchsia', 'purple','yellow','pink','orange'];

  return colors[Math.floor(Math.random() * colors.length)] + '_' + animals[Math.floor(Math.random() * animals.length)];
  
}

var me = randomName();
$('#whoami').text(me);

var $input = $('#chat-input');
var $output = $('#chat-output');

var pubnub = PUBNUB.init({
  publish_key: 'demo',
  subscribe_key: 'demo',
  uuid: me
});

var channel = 'memewarz-lobby-demo-5';

$('#chat').submit(function() {
    
  pubnub.publish({
    channel: channel,
    message: {
      text: $input.val(),
      username: me
    }
  });
  
  $input.val('');
  
  return false;
  
});

pubnub.subscribe({
  channel: channel,
  message: function(data) {
    
    var $line = $('<li class="list-group-item"><strong>' + data.username + ':</strong> </span>');
    var $message = $('<span class="text" />').text(data.text).html();
    
    $line.append($message);
    $output.append($line);
    
    $output.scrollTop($output[0].scrollHeight);

  }, 
  presence: function(data) {

    console.log(data);

    // get notified when people join
    if(data.action == "join") {

      var $new_user = $('<li id="' + data.uuid + '" class="list-group-item">' + data.uuid + '</li>')

      $('#online-users').append($new_user);

    }

    // and when they leave
    if(data.action == "leave"  || data.action == "timeout") {
      $('#' + data.uuid).remove();
    }

  }
});
</script>

   
</div>
</div>
</div>
<?php get_footer();