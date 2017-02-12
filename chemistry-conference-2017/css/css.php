div#comments {
  background-color: #fff;
  padding: 4px;
  margin-top: 4px;
  width: 99%;
}
div#comments .comment_editor_header {
  padding-left: 4px;
  font-weight: bold;
}
div#comments .comments-title {
  font-size: 15pt;
  text-shadow: 1px 1px 0 #DDDDDD;
  text-transform: none;
  padding: 2px;
  margin: 8px 0 8px 0;
}
div#comments p.comment-text { border: 1px solid #f0f0f0;
  color: #000; margin: 4px; padding: 4px;
}
div#comments ol {
  padding: 0;
  margin: 8px 0 0 0;
}
div#comments ol li {
  background-color:#F9F9F9;
  border:1px solid #CFCFCF;
  font-style: normal;
  height:auto !important;
  margin: 4px 0;
  min-height:60px;
  list-style:none outside none;
  padding: 0;
  overflow:hidden;
}
div#comments ol li div.comment {
  padding: 4px;
  min-height: 40px;
  width: 99%; }

div#comments .meta {
  padding-bottom:32px;
  background:url(includes/images/bg_comments1.gif) no-repeat 0 100%;
  width: 550px;
  }
div#comments .meta li{
  background-color: transparent;
  border: none;
  margin:0;
  display:inline;
	font-size:12px;
	color:#777;
	position:static;
  padding: 2px;
	}
div#comments .meta .author{
	font-size:14px;
	font-weight:bold;
	}

div#comments ol li div.comment-admin {
  float: right;
  display: inline-block;
  padding: 2px;
  margin: 1px 8px 1px 2px;
  height: 20px;
  vertical-align: top;
}
div#comments ol li span.admin-hint {
  display: none;
  font-family: Helvetica,Arial,sans-serif;
  font-size: 11px;
}
div#comments ol li div.comment-admin:hover {
  background-color: #FFC0C0;
}
div#comments ol li div.comment-admin:hover span {
  display: inline-block;
}
div#comments ol li img.avatar {
  background-color: #fff;
  padding: 3px;
  border: 1px solid #eee;
  width: 60px; height: 60px;
}
div#comments ol li div.avatar-column {
  background-color: #fff;
  float: left;
  width: auto;
  height: auto;
}
div#comments ol li div.message-column {
  background-color: #fff;
  margin-left: 60px;
  width: auto;
}
div#comments ol li p {
  padding: 2px;
  margin-top: 4px;
}
div#comments ol li span {
  line-height: 20px;
  margin-bottom: 10px;
  padding: 0;
}
div#comments ol li span.date {
  color: #666;
}
div#comments ol li span.username,
div.comment_username {
  font-weight: bold;
  padding: 4px;
}
form#comment-form {
  background-color:#F9F9F9;
  border: 1px solid #CFCFCF;
  clear: both;
  margin: 0;
  overflow: hidden;
  padding: 4px;
}
form#comment-form markItUpComment_comment { width: 100%; min-height: 250px; padding: 0; }
form#comment-form div.markItUpContainer { width: 98%; min-height: 200px; padding: 4px; }
#comment_comment {
  font: 14px 'Lucida Console', Courier, monospace;
  padding: 0px;
  margin: 0px;
  border:1px solid #3C769D;
  height: 166px;
  position: relative;
  left: 4px;
  line-height:17px;
  overflow: scroll;
  width: 98%;
  z-index: 1;
}
form#comment-form input {
  border: 1px solid #CFCFCF;
  padding: 4px;
  display: block;
  width: 300px;
  margin-bottom: 10px;
  margin-left: 4px;
}
form#comment-form input[type="submit"] {
  background-color:#58B9EB;
  border:1px solid #40A2D4;
  color:#FFFFFF;
  cursor:pointer;
  font-family: Helvetica,Arial,sans-serif;
  font-size:14px;
  font-weight:bold;
  padding:4px;
  margin-top:5px;
  width: 150px;
  border-radius:4px; -webkit-border-radius:4px;
}
form#comment-form input[type="submit"]:hover {
  background-color:#80cdf5;
  border-color:#52b1e2;
}
a.comment-edit {
  background: transparent url("includes/images/edit.png") no-repeat scroll top center;
  display: inline-block;
  font-size: 12px;
  height: 18px;
  padding: 1px 1px 1px 22px !important;
  margin: 0 2px 0 2px !important;
  white-space: nowrap;
  width: auto !important;
}
a.comment-delete {
  background: transparent url("includes/images/eraser.png") no-repeat scroll top center;
  display: inline-block;
  font-size: 12px;
  height: 18px;
  padding: 1px 1px 1px 22px !important;
  margin: 0 2px 0 2px !important;
  white-space: nowrap;
  width: auto !important;
}
/* SD343 */
div.comment div.likes-box { display: inline; float:none; padding: 6px 4px 6px 4px; }
div.comment a.like-link {
  background:none no-repeat scroll 0 center transparent;
  background-image:url(includes/images/thumb-up.png);
  padding: 2px 1px 2px 20px; }



div #error_message {
	background: #ffeaef;
	border: 3px solid #ff829f;
	left: 55px;
	margin-bottom: 15px;
	padding: 15px; }
 
div #success_message {
	background: #eaf4ff;
	border: 3px solid #82c0ff;
	left: 55px;
	margin-bottom: 15px;
	padding: 15px; }

div.pagination {
  font-family: Helvetica, Times, serif;
  font-style: italic;
  font-size: 12px;
  padding: 0px;
  margin: 0px;
  overflow: hidden;
  line-height: 40px;
  text-align: left;
  height: 40px;
  white-space:nowrap;
  }

  div.pagination a {
    padding: 2px 4px 2px 4px;
    margin: 1px;
    text-decoration: none;
    color: #44B0EB; }

  div.pagination a:hover {
    background-color: #44e5eb;
    color: #fff; }

  div.pagination span.current {
    padding: 2px 4px 2px 4px;
    margin: 1px;
    font-weight: bold;
    background-color: #44B0EB;
    color: #fff; }

  div.pagination span.disabled {
    display: none;
    padding: 2px 4px 2px 4px;
    margin: 1px;
    color: #ddd; }

.sf-menu ul {
	position: absolute;
	top: -999em;
	width: 10em; /* left offset of submenus need to match (see below) */ }
 
	.sf-menu ul li { width: 100%; }
 
	.sf-menu li:hover { visibility: inherit; /* fixes IE7 'sticky bug' */ }
 
	.sf-menu li { position: relative; }
 
	.sf-menu a {
		display: block;
		padding-left: 20px;
		padding-right: 20px; }
 
	.sf-menu li:hover ul, .sf-menu li.sfHover ul {
		left: 0;
		background: #ffffff;
		top: 24px; /* match top ul list item height */
		z-index: 99; }
 
	.sf-menu li:hover li ul, .sf-menu li.sfHover li ul, .sf-menu li li:hover li ul, .sf-menu li li.sfHover li ul { top: -999em; }
 
	.sf-menu li li:hover ul, .sf-menu li li.sfHover ul, .sf-menu li li li:hover ul, .sf-menu li li li.sfHover ul {
		left: 10em; /* match ul width */
		top: 0; }

div.bbcode_quote,
div.bbcode_code {
  border: 1px solid #d2e4f7;
  border-radius: 2px;
  -webkit-border-radius: 2px;
  background-color: #f5f5f5;
  padding: 2px;
  margin-top: 4px;
  margin-bottom: 4px;
  max-height: 360px;
  max-width: 758px;
  overflow: hidden;
  /*width: 98%;  must be < 100% for nested quotes! */
}
div.bbcode_quote .toolbar,
div.bbcode_code  .toolbar { display:none; }
div.bbeditor {
  font-size: 14px !important;
  position: relative;
  width: auto;
  height: 24px;
  margin: 0;
  padding: 0; }
div.bbeditor img {
  padding: 3px;
  border: 1px solid #eee;
  margin-right: 3px;
  background-color: #fff;
  cursor: pointer; }
div.bbcode_quote_head, div.bbcode_code_head {
  font-weight: bold;
  margin-bottom: 4px;
}
div.bbcode_quote_body,
div.bbcode_code_body {
  border: 1px solid #dadada;
  font-size: 14px !important;
  line-height: 16px;
  max-height: 350px;
  overflow: scroll;
  padding: 4px;
  width: auto;
}
div.bbcode_quote_body {
  max-height: 320px;
  overflow: auto;
  font-style: italic !important;
}
div.bbcode_code_body {
  border: 0;
  font-family: "Lucida Console",courier,monospace,mono !important;
  white-space: pre;
}
div.bbcode_code_head {
  background-color: #E3E3E3;
  font-family: "Courier New",monospace,mono !important;
  font-size: 13px;
  height: 14px;
  line-height: 12px;
  padding: 5px;
}
.markItUpContainer { max-width: 900px; }
ul.bbcode_list { list-style-position: inside; }
ul.bbcode_list li { color: #000; }
div.bbcode_code ol.highlighted * {
  font-family: "Lucida Console", "Courier New", helvetica, sans-serif !important;
  font-size: 13px;
  line-height: 17px;
}

span.bbcode_spoiler { color: #000; background-color: #000; }
span.bbcode_spoiler:hover { color: #000; background-color: transparent; }


div.rating_wrapper * { font-size:12px !important; margin: 0; border: 0; padding: 0; height: 22px; text-align: left; }
div.rating_wrapper { overflow: show; height: 20px; margin-bottom: 2px; }
div.sp_rating { /*font-family: Helvetica,Arial,sans-serif;*/ line-height:1.7em; height: 100%; color:#5f5f5f; display:block; }
  div.sp_rating div.rating { float:left; padding-right: 4px; padding-top: 0; }
  div.sp_rating div.base { background:url(includes/images/ratings.png) 0 0 no-repeat; width: 85px; height: 16px; float:left; padding-top: 0; padding-right: 4px; overflow:hidden; }
  div.sp_rating div.average { background:url(includes/images/ratings.png) 0 -16px no-repeat; height: 16px; text-indent:-9999px; padding-top: 0; }
  div.sp_rating div.votes { float:left; padding-top: 0; padding-right: 4px; }
  div.sp_rating div.score { background: url(includes/images/ratings.png) 0 0 no-repeat; width:85px;
    height: 16px; float:left; position:relative; padding-top: 0; margin-top: 0; }
  div.sp_rating div.score a {
      display: block; height: 100%; float: left; padding: 0; text-indent: -9999px; position: absolute;
      margin-top: 0; overflow: hidden; line-height: 18px; }
  div.sp_rating a.score1 {width:20%; z-index:55; }
  div.sp_rating a.score2 {width:40%; z-index:54; }
  div.sp_rating a.score3 {width:60%; z-index:53; }
  div.sp_rating a.score4 {width:80%; z-index:52; }
  div.sp_rating a.score5 {width:100%; z-index:51; }
  div.sp_rating div.score a:hover { background:url(includes/images/ratings.png) bottom right no-repeat; }
  div.sp_rating div.rating_status { height: 18px; overflow: hidden; position: relative; }
  div.sp_rating div.rating_score_this { height: 100%; overflow: show; width: 120px; }
  div.sp_rating div.rating_score_this a { color: #44b0eb; }


/* -------------------------------------------------------------------
// markItUp!
// By Jay Salvat - http://markitup.jaysalvat.com/
// ------------------------------------------------------------------*/
.bbcode .markItUpButton1 a {background-image:url(includes/images/markitup/bold.png);}
.bbcode .markItUpButton2 a {background-image:url(includes/images/markitup/italic.png);}
.bbcode .markItUpButton3 a {background-image:url(includes/images/markitup/underline.png);}
.bbcode .markItUpButton4 a {background-image:url(includes/images/markitup/picture.png);}
.bbcode .markItUpButton5 a {background-image:url(includes/images/markitup/link.png);}
.bbcode .markItUpButton6 a {background-image:url(includes/images/markitup/colors.png);}
.bbcode .markItUpButton6 ul { padding:1px; width:81px; }
.bbcode .markItUpButton6  li {
    border:1px solid white;
    width:25px;  height:25px;
    overflow:hidden;
    padding:0px; margin:0px;
    float:left;
}
.bbcode .markItUpButton6 ul a {width:25px; height:25px;}
.bbcode .markItUpButton6 ul a:hover { background-color:none; }
.bbcode .markItUpButton6 .col1-1 a {background:yellow;}
.bbcode .markItUpButton6 .col1-2 a {background:orange;}
.bbcode .markItUpButton6 .col1-3 a {background:red;}
.bbcode .markItUpButton6 .col2-1 a {background:blue;}
.bbcode .markItUpButton6 .col2-2 a {background:purple;}
.bbcode .markItUpButton6 .col2-3 a {background:green;}
.bbcode .markItUpButton6 .col3-1 a {background:white;}
.bbcode .markItUpButton6 .col3-2 a {background:gray;}
.bbcode .markItUpButton6 .col3-3 a {background:black;}
.bbcode .markItUpButton7 a {background-image:url(includes/images/markitup/fonts.png);}
.bbcode .markItUpButton8 a { /* Smilies */
  background-image:url(includes/images/smileys/smile.png);
}
.bbcode .markItUpButton9 a {background-image:url(includes/images/markitup/list-bullet.png);}
.bbcode .markItUpButton10 a {background-image:url(includes/images/markitup/list-numeric.png);}
.bbcode .markItUpButton11 a {background-image:url(includes/images/markitup/list-item.png);}
.bbcode .markItUpButton12 a {background-image:url(includes/images/markitup/quotes.png);}
.bbcode .markItUpButton13 a {background-image:url(includes/images/markitup/code.png);}
.bbcode .markItUpButton14 a {background-image:url(includes/images/markitup/clean.png);}
.bbcode .markItUpButtonXX a {background-image:url(includes/images/markitup/preview.png); display: none;}

/* Color Palette */
.bbcode .colors a { background-image:url(includes/images/markitup/colors.png);}
  .bbcode .colors ul {
    width:110px;
    padding:2px !important;
    margin:2px !important;}
  .bbcode .colors li {
    border:1px solid white;
    width:25px;
    height:25px;
    overflow:hidden;
    padding:2px !important;
    margin:2px !important;
    float:left;}
  .bbcode .colors ul a { width:25px; height:25px; }
  .bbcode .colors ul a:hover {background-color: none;}
  .bbcode .colors .col1-1 a {background:yellow;}
  .bbcode .colors .col1-2 a {background:orange;}
  .bbcode .colors .col1-3 a {background:red;}
  .bbcode .colors .col2-1 a {background:blue;}
  .bbcode .colors .col2-2 a {background:purple;}
  .bbcode .colors .col2-3 a {background:green;}
  .bbcode .colors .col3-1 a {background:white;}
  .bbcode .colors .col3-2 a {background:gray;}
  .bbcode .colors .col3-3 a {background:black;}
.bbcode .calculator a { background-image:url(includes/images/markitup/calculator.png); }

/* Smileys - point to /includes/images/smileys folder! v3.3.2 */
.bbcode .smileys a { background-image:url(includes/images/smileys/smile.png); }
  .bbcode .smileys ul {
    width: 126px;
    padding: 2px !important;
    margin: 2px !important; }
  .bbcode .smileys li {
    border: 1px solid white;
    width: 20px;
    height: 22px;
    overflow: hidden;
    padding: 2px !important;
    margin: 2px !important;
    float: left; }
  .bbcode .smileys ul a { width: 20px; height: 20px; }
  .bbcode .smileys ul a:hover {background-color: none;}
  .bbcode .smileys .col1-1 a {background-image:url(includes/images/smileys/smile.png);}
  .bbcode .smileys .col1-2 a {background-image:url(includes/images/smileys/bigsmile.png);}
  .bbcode .smileys .col1-3 a {background-image:url(includes/images/smileys/laugh.png);}
  .bbcode .smileys .col1-4 a {background-image:url(includes/images/smileys/angry.png);}
  .bbcode .smileys .col2-1 a {background-image:url(includes/images/smileys/neutral.png);}
  .bbcode .smileys .col2-2 a {background-image:url(includes/images/smileys/confuse.png);}
  .bbcode .smileys .col2-3 a {background-image:url(includes/images/smileys/surprise.png);}
  .bbcode .smileys .col2-4 a {background-image:url(includes/images/smileys/cool.png);}
  .bbcode .smileys .col3-1 a {background-image:url(includes/images/smileys/tongue.png);}
  .bbcode .smileys .col3-2 a {background-image:url(includes/images/smileys/worry.png);}
  .bbcode .smileys .col3-3 a {background-image:url(includes/images/smileys/wink.png);}
  .bbcode .smileys .col3-4 a {background-image:url(includes/images/smileys/sleepy.png);}
  .bbcode .smileys .col4-1 a {background-image:url(includes/images/smileys/blush.png);}
  .bbcode .smileys .col4-2 a {background-image:url(includes/images/smileys/saint.png);}
  .bbcode .smileys .col4-3 a {background-image:url(includes/images/smileys/blue.png);}
  .bbcode .smileys .col4-4 a {background-image:url(includes/images/smileys/frown.png);}
  .bbcode .smileys .col5-1 a {background-image:url(includes/images/smileys/sweatdrop.png);}
  .bbcode .smileys .col5-2 a {background-image:url(includes/images/smileys/cake.png);}
  .bbcode .smileys .col5-3 a {background-image:url(includes/images/smileys/star.gif);}
  .bbcode .smileys .col5-4 a {background-image:url(includes/images/smileys/heart.gif);}
/* -------------------------------------------------------------------
// markItUp! Universal MarkUp Engine, JQuery plugin
// By Jay Salvat - http://markitup.jaysalvat.com/
// ------------------------------------------------------------------*/
.markItUp * { margin:0; padding:0; outline:none; }
.markItUp a:link,
.markItUp a:visited { color:#000; text-decoration:none; }
.markItUp  { width:98%; margin:5px 0 5px 0; border:5px solid #F5F5F5; }
.markItUpContainer  {
  border:1px solid #ccc;
  background:#FFF;
  padding:5px 5px 2px 5px;
  font:11px Arial, Helvetica, Verdana, sans-serif;}
textarea.markItUpEditor {
  font:14px 'Lucida Console', Courier, monospace;
  margin: 2px;
  border:1px solid #ccc;
  clear:both;
  display:block;
  line-height:17px;
  overflow: scroll;
  width: inherited; }
.markItUpPreviewFrame {
  overflow:auto;
  background-color:#fff;
  border:1px solid #ccc;
  width:99.9%;
  height:300px;
  margin:5px 0;}
.markItUpFooter { clear:both; width:100%; cursor:n-resize; }
.markItUpResizeHandle {
  overflow:hidden;
  width:22px; height:5px;
  margin-left:auto;
  margin-right:auto;
  background-image:url(includes/images/markitup/handle.png);
  cursor:n-resize; }
/* first row of buttons */
.markItUpHeader ul  {
  list-style-type: none !important;
  padding: 2px !important;
  margin: 2px !important;
}
.markItUpHeader ul li,
.markItUpHeader ul ul li {
  margin: 0px !important;
  padding: 0px !important;
}
.markItUpHeader ul li {
  list-style:none !important;
  float:left;
  position:relative;
  margin-right: 2px !important;
  padding: 2px !important;
}
.markItUpHeader ul li:hover {
  background-color: #f0f0f0;
}
.markItUpHeader ul li ul {
  display:none;
  list-style-type: none;
}
.markItUpHeader ul li:hover > ul {
  list-style-type: none;
  display:block;
}
.markItUpHeader ul .markItUpDropMenu {
  background:transparent url(includes/images/markitup/menu.png) no-repeat 115% 50%;
  margin-right:4px;
  z-index: 10; /* 1000; */
}
.markItUpHeader ul .markItUpDropMenu li {
  margin-right:0px;
  list-style: none !important;
}
.markItUpHeader ul .markItUpSeparator {
  background:transparent url(includes/images/markitup/handle.png) repeat-y;
  margin:0 10px;
  width:1px;
  height:16px;
  overflow:hidden;
  background-color:#ccc;
}
.markItUpHeader ul ul .markItUpSeparator {
  width:auto; height:1px;
  margin:0px;
}
/* next rows of buttons */
.markItUpHeader ul ul {
  display:none;
  position:absolute;
  list-style:none !important;
  top:22px; left:0px;
  background:#F5F5F5;
  border:1px solid #d0d0d0;
  height:inherit;
  width:120px;
}
.markItUpHeader ul ul li {
  float:none;
  border-bottom:1px solid #d0d0d0;
}
.markItUpHeader ul ul .markItUpDropMenu {
  background:#F5F5F5 url(includes/images/markitup/submenu.png) no-repeat 100% 50%;
}
/* next rows of buttons */
.markItUpHeader ul ul ul {
  position:absolute;
  top:-1px; left:120px;
}
.markItUpHeader ul ul ul li {
  float:none;
}
.markItUpHeader ul a {
  display:block;
  width:18px; height:18px;
  text-indent:-10000px;
  background-repeat:no-repeat;
  padding:3px;
  margin:0px;
}
.markItUpHeader ul ul a {
  display:block;
  padding-left:0px;
  text-indent:0;
  width:120px;
  padding:5px 2px 5px 30px;
  background-position:2px 50%;
}
.markItUpHeader ul ul a:hover {
  color:#FFF;
  background-color:#d0d0d0;
  width:inherit;
}
li.markItUpButton {
  list-style:none;
  list-style-type: none;
}

div#p9_top_posters { padding: 0px; margin: 0px; width: 100%; }
div#p9_top_posters div.p9_header { display: none; padding: 4px; }
div#p9_top_posters ul { clear: both; padding: 0; margin: 0; }
div#p9_top_posters ul li {
  list-style: none outside none;
  /* background:none repeat scroll 0 0 #F9F9F9; */
  /* border:1px solid #CFCFCF; */
  height: auto !important;
  line-height: 13px;
  margin: 2px 0 0 0; padding: 2px 0 0 0;
  overflow:hidden; }
/*
div#p9_top_posters ul li:nth-child(odd) {
  background:none repeat scroll 0 0 #e3f2fc;
} */
div#p9_top_posters ul li div.p9-outer { width: 100%; }
div#p9_top_posters ul li div.p9-user { margin-top: 3px; width: 100%; }
div#p9_top_posters ul li img.avatar {
  /* background-color: #fff;
  border: 1px solid #eee; */
  padding: 2px 6px 2px 2px; }
div#p9_top_posters ul li div.p9-avatar {
  background-color: transparent;
  float: left;
  width: auto;
  height: auto;}
div#p9_top_posters ul li div.p9-user {
  /*font-family: Helvetica,Arial,sans-serif !important;
  font-size: 14px;*/
  display: inline;
  float: left;
  font:inherit;
  padding: 4px;
  margin-bottom: auto;
  margin-top: auto;
  width: auto;}
div#p9_top_posters ul li span { font:inherit; padding-top: 4px; }
div#p9_top_posters ul li span.p9-count { color: #666; /* font-size: smaller; */ }


div.latest_articles { margin-bottom: 8px; }

div.latest_articles_container {
  display: block;
  clear: both;
  height: auto;
  margin: 0;
  padding-right: 14px;
}
div.latest_article { display: block; clear: both; float: none; padding: 0px; margin-bottom: 8px;}
div.latest_article img {
  background-color: #fff;
  display: inline-block;
  float: left;
  padding: 3px;
  border: 1px solid #eee;
  height: 40px;
  padding: 3px;
  margin: 2px 12px 2px 2px;
  width: 40px;
  box-shadow:#333 2px 2px 5px;
  -moz-box-shadow:#333 2px 2px 5px;
  -webkit-box-shadow:#333 2px 2px 5px;
}


/* User Login Panel plugin CSS */
.login-panel {
  padding: 0px;
  margin: 0 0 8px 4px;
}

.login-panel div.login-avatar {
  clear: both;
  display: block;
}

.login-form { padding: 0; }
  .login-form input { width: 70px; }
  .login-form .login-div-user1 { display: inline; float: left; padding: 0px; vertical-align: middle; width: 80px;}
  .login-form .login-div-user2 { display: block; clear: right; }
  .login-form .login-div-pwd1  { clear: left; display: inline; float: left; padding: 0px; vertical-align: middle; width: 80px; }
  .login-form .login-div-pwd2  { display: block; clear: right; }
  .login-form .login-div-remember { display: block; clear: both; padding: 0px; width: 100%; }
  .login-form .login-div-remember input { border: 0; padding: 4px; }
  .login-form .login-div-submit   { display: block; clear: both; padding: 0px; }
  .login-div-register { display: block; clear: both; padding: 6px; width: 100px; }
  .login-div-lostpwd { display: block; clear: both; padding: 6px; width: 100px; }

.login-form input[type="submit"] {
  background-color: #58B9EB;
  border: 1px solid #40A2D4;
  color: #FFFFFF;
  cursor: pointer;
  font-family: Helvetica,Arial,sans-serif;
  font-size: 12px;
  font-weight: bold;
  padding: 2px 8px 2px 8px;
  margin: 4px 4px 8px 0px;
  width: auto;
  border-radius:4px;
  -webkit-border-radius:4px;
}

.login-form input[type="submit"]:hover {
  background-color:#80cdf5;
  border-color:#52b1e2;
}

.login-welcome {
  clear: right;
  display: block;
  font-size: 12px; font-weight: bold;
  padding: 0;
  margin-bottom: 8px;
}
