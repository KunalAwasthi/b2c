<?php
require_once 'sess_val.php';
?>
<!DOCTYPE html>
<html id="fh4jf">
	<head>
		<title>
			qna | dashoboard
		</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<script language="JavaScript" type="text/javascript" src="/js/_m3r.js"></script>

		
		<?php
			//include head
			include 'headTags.php';
		?>
	</head>
<body class="body">
	<?php
		//including header
		include 'header.php';
	?>
	
			<!--Content Here-->
	
	<div class="container"> 
			<div class="center-block">
				<h2><u>Q &amp; A</u></h2>
				<div class="log-table">
					<table class="stripped" id="p-tab">
						<thead>
							<tr>
								<th>Question</th>
								<th>Answer</th>
								<th>Prdouct Link</th>
								<th>Added on</th>
								<th>Answered on</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="tbdy">
						</tbody>
					</table>
				</div>
				<div id="error">
				</div>
			</div>
	</div>
		
		
		<div class="dialog" id="dlg1">
			<div id="dhead">
			Edit Answer
			<span class="fa right" onclick="this.parentElement.parentElement.style.display='none';document.getElementsByClassName('blurdfg')[0].style.display='none';">
				&times;
				</span>
				<div class="clearfix"></div>
			</div>
			<div class="dialog-body">
				<form class="jk-form pdct-form" id="qntefm" >
						<div class="vs" id="valsum1">
							<h3 id="vsh4" class="vs">Something Went wrong</h3>
						</div>
						<div class="form-group">
							Question
							<p id="ques_e_p"></p>
						</div>
						<div class="form-group">
							Answer
							<input id="e_answer" onchange="validate({'id':'e_answer','name':'Name','regex':null,'length':null,'min_length':9,'max_length':255})" type="text" placeholder="Full Name" name="qna_answer"/>
						</div>
						<div class="form-group">
							<input type="hidden" name="qna_id" id="qe5d_3fid" value="">
							<input type="button" id="ed" class="btn btn-success" value="Edit"/>
						</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="dialog" id="dlg2">
			<div id="dhead">
			Answer
			<span class="fa right" onclick="this.parentElement.parentElement.style.display='none';document.getElementsByClassName('blurdfg')[0].style.display='none';">
				&times;
				</span>
				<div class="clearfix"></div>
			</div>
			<div class="dialog-body">
				<form class="jk-form pdct-form" id="qnatefm" >
						<div class="vs" id="valsum2">
							<h3 id="vsh4" class="vs">Something Went wrong</h3>
						</div>
						<div class="form-group">
							Question
							<p id="ques_a_p"></p>
						</div>
						<div class="form-group">
							Answer
							<input id="answer" onchange="validate({'id':'answer','name':'Name','regex':null,'length':null,'min_length':9,'max_length':255})" type="text" placeholder="Full Name" name="qna_answer"/>
						</div>
						<div class="form-group">
							<input type="hidden" name="qna_id" id="qa5d_3fid" value="">
							<input type="button" id="ad" class="btn btn-success" value="Edit"/>
						</div>
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	<?php
		//including footer
		include 'footer.php';
	?>
	<script>
	function getQuestions(){

	}
	function addShadow(){
		$(".search-container").css("border","1px solid orange");
		$(".search-container").addClass("shadow");
	}
	function rmShadow(){
		$(".search-container").css("border","1px solid gray");
		$(".search-container").removeClass("shadow");
	}
	</script>
</body>
</html>