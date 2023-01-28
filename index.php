<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grok</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
	  rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
	  rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
	  rel="stylesheet"/>
	  <link rel="stylesheet" type="text/css" href="css/loading.css">
	  <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<style type="text/css">

/* width */
::-webkit-scrollbar {
  width: 8px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #D7BDE2; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}

	body{
		background: #fbfbfb;
	}
	.box{
		width: 100%;
/*		height: auto;*/
min-height: 100px;
max-height: auto;
        border: 1px solid #D0D3D4;
        border-radius: 10px;
        margin-bottom: 10px;

	}
	.loading_div{
		display: none;
	}

	.prompt_textarea{
		width: 100%;
		height: 120px;
		margin-top: 10%;
	}
	.bottom_div{
		width:100%;
		height: 200px;
		background: grey;
		position: fixed;
		bottom: 0;		
		clip-path: inset(100% 0 0 0);
		transition: .1s;
	}
	.bottom_div_show{
		clip-path: inset(0 0 0 0);
	}
	.wait_btn{
		display: none;
	}

	#result_success{
		display: none;
	}
	.thump_up{
		background: green;
		border:1px solid green;
		color: white;
	}
	.thump_down{
		background: red;
		border:1px solid red;
		color: white;
	}
	.log_comments_submit_Wait{
		display: none;
	}



	.option-menu-div{
		display: none;
	}

	.search-query-div{
		display: none;
	}

	.view-result{
		display: none;
	}



</style>
<body>

  


<div style="width: 100%;height: auto;background: #fbfbfb;margin-top: 1%;"> 
<br><br>
	
	<center><div class="loading_div">
						<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
						<center>Please Wait..</center>
					</div></center>


  <div class="container-fluid">
    	<div class="row">
    		<div class="option-menu-div">
    			  <div style="height: 90vh;" class="card container">
    			  	<br><br>
    			  	<button class="btn change_search_and_prompt">Search Result + Prompt</button><br>
    			  	<button class="btn change_prompt">Change Prompt</button><br>
    			  	<button class="btn view-result">Result</button>
    			  </div>
    		</div>

    		<div class="search-query-div">
    			<div class="card" style="padding: 20px 20px;height: 90vh;overflow-x: auto;">

					<!-- <center><div class="loading_div">
						<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
						<center>Please Wait..</center>
					</div></center>	 -->



    				<div class="container" id="result">
    					<!--  <div class="row">
    					 <div class="col-md-1">
    						<input style="margin-top: 150px;width: 20px;height: 20px;" type="checkbox" name="">
    					 </div>
    					 <div class="col-md-11">    						
						       <div class="box">
					             <div style="padding:10px 10px;" class="container">
					             	 <input type="text" name="" class="para_id">
					             	  <h6 style="font-weight: normal!important;font-size: 14px;"></h6>
					             	  <h6>Title: How AI Can Drive Optimization for B2B Marketing</h6>
					             	  <h6 style="font-weight: normal;"><span>Relevent Score : </span> | <span>Source :</span></h6>
					             </div>
				           </div>    			         
    				   	</div>
    				  </div> -->
    				</div> 


    				<div class="container" id="result_success">
    						

    					<div style="width: 100%;height: 200px;overflow-x: auto;border: 1px solid #626567;padding: 10px 10px;margin-bottom: 20px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Meta Summary</h5>
    							</div>
    						</div>
    						<br>
    								<div class="row container-fluid">
    						<div class="col-md-6">
    							<div style="padding: 10px 10px;" class="box">
					           <h6 id="meta_summary_flow_a"></h6>
				           </div>
    						</div>
    						<div class="col-md-6">
    							<div style="padding: 10px 10px;" class="box">
					          <h6 id="meta_summary_flow_b"></h6>
				           </div>
    						</div>  			
    						

    						
    					</div>
    					</div>


    			


    					<div style="width: 100%;height: 200px;overflow-x: auto;margin-bottom: 20px;border: 1px solid #626567;padding: 10px 10px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Individual summaries A</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="individual_summaries_flow_a">				
    							</div>
    					</div>

    					<div style="width: 100%;height: 200px;overflow-x: auto;margin-bottom: 20px;border: 1px solid #626567;padding: 10px 10px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Individual summaries B</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="individual_summaries_flow_b">				
    							</div>
    					</div>

    					<div style="width: 100%;height: 200px;overflow-x: auto;margin-bottom: 20px;border: 1px solid #626567;padding: 10px 10px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Open AI FLow A</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="openai_request_1_flow_a">				
    							</div>
    					</div>


    				
    					<div style="width: 100%;height: 200px;overflow-x: auto;margin-bottom: 20px;border: 1px solid #626567;padding: 10px 10px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Open AI FLow B</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="openai_request_1_flow_b">				
    							</div>
    					</div>

    						<!-- <div style="width: 100%;height: 200px;overflow-x: auto;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Open AI FLow B</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="openai_request_1_flow_b">				
    							</div>
    					</div> -->

    					
    					<div style="width: 100%;height: 200px;overflow-x: auto;margin-bottom: 20px;border: 1px solid #626567;padding: 10px 10px;border-radius: 10px;">
    						<div class="container-fluid row">
    							<div class="col-md-12">
    								<h5>Open AI FLow A & B</h5>
    							</div>
    						</div>
    						<br>
    							<div class="container-fluid row" id="openai_request_2_flow_a_b">				
    							</div>
    					</div>
    				

    					



    			
    					<div style="width: 100%;height: 80px;border:1px solid #D0D3D4;border-radius: 10px;padding: 20px 20px;">
    							<div class="row">
    						<div class="col-md-12">
    							<button class="thum-up-btn" id="1"><i class="fa-solid fa-thumbs-up"></i></button>
    							<button class="thum-down-btn" id="0"><i  class="fa-solid fa-thumbs-down"></i></button>
    							&nbsp;&nbsp;
    							<input type="text" style="width: 60%;height: 35px;padding-left: 10px;" class="log_comments" name="" placeholder="Log Comments">

    							<button class="btn btn-outline-primary log_comments_submit">SUbmit</button>

    								<button class="btn btn-outline-primary log_comments_submit_Wait">Please Wait..</button>







    						</div>
    					</div>
    					</div>
    					
    					

    				</div> 



    			</div>
    		</div>
    	</div>
    </div> 
  </div>
</div>




<div class="bottom_div">
	<div class="row">
		<div class="col-md-11">
			
		</div>
		<div class="col-md-1">
			<button class="close_btn" style="margin-top:10px;float: right;margin-right: 15px;">X</button>
		</div>
	</div>
	<center>
		
  <div style="margin-top:-3%;" class="container">	
	<div class="row">
		<div class="col-md-5">
			<textarea class="prompt_textarea prompt_1 form-control" placeholder="prompt 1"></textarea>
		</div>
		<div class="col-md-5">
			<textarea class="prompt_textarea prompt_2 form-control" placeholder="prompt 2"></textarea>
		</div>
		<div class="col-md-2">
			<button style="margin-top: 40%;" class="btn btn-success submit_prompt">Submit</button>

			<button style="margin-top: 40%;background: #48C9B0;" class="btn btn-success wait_btn">Please Wait..</button>
		</div>
	</div>
 </div>
</center>
</div>








<nav style="position: fixed;width: 100%;top: 0;" class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <div>
    	<button class="btn btn-outline-primary view-result">Result</button>
    </div>

    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample">
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">

        <li style="padding-right: 15px;" class="nav-item">
          <input style="width: 500px;"  class="form-control query" type="text" name="" placeholder="Enter Query">
        </li>

        <li style="padding-right: 15px;" class="nav-item">
          <input class="form-control optional_comment" type="text" name="" placeholder="Optional Comment">
        </li>
       
        <li class="nav-item">
          <button type="button" class="btn btn-outline-primary search_btn" data-mdb-ripple-color="dark">Search</button>
        </li>

       

      </ul>
      <!-- Left links -->

    </div>
    <div style="display: inline-flex;">
    	<i style="margin-top: 5px;margin-right: 5px;color: black;" class="fa-regular fa-clock"></i>
    	<label><span class="runtime_display">0.0</span> sec</label>


    	<i style="margin-top: 2px;margin-right: 5px;color: black;margin-left: 20px;font-size: 25px;" class="fa-regular fa-square-check submit_form" title="View Prompt Form"></i>
    </div>
  </div>
  <!-- Container wrapper -->
</nav>
























<input type="hidden" name="" class="runtime">
<input type="hidden" name="" class="ep1_query_id">
<input type="hidden" name="" class="ep2_query_id">

</body>
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</html>
<script type="text/javascript">




	$('.search_btn').click(function(){
		var query = $('.query').val();
		var optional_comment = $('.optional_comment').val();
		if (query == '') {

		}
		else{
			$('.view-result').hide();
		$('.loading_div').show();
		$.ajax({
			url:'request/search.php',
			method:'POST',
			//dataType: 'json',
			data:{query:query, optional_comment:optional_comment},
			success:function(data){
			tmp.splice(0, tmp.length);
				//console.log(data);

				$('.search-query-div').show();

				$('#result_success').hide();
				$('#result').show();


				$('.search-query-div').removeClass("col-md-10");
				$('.option-menu-div').hide();
				$('.option-menu-div').removeClass("col-md-2");
				$('.bottom_div').removeClass("bottom_div_show");

				$('.prompt_1').val("");
				$('.prompt_2').val("");








				var res = JSON.parse(data);
				var runtime = res['runtime'];
				var ep1_query_id = res['ep1_query_id'];
				$('.runtime_display').html(parseFloat(runtime).toFixed(2));
				$('.runtime').val(runtime);
				$('.ep1_query_id').val(ep1_query_id);				
				$('.loading_div').hide();
				//$('#result').html(res['matches']);			

				var matches_result = res['matches'];
				var matches_result_count = matches_result.length;
				var data_parse = '';		
				// console.log(matches_result[0]['id']);

				for (var i = 1; i < matches_result_count; i++) {					
					//console.log(matches_result[0]['id']);
					//data_parse += "<div class='box'>"+matches_result[i]['id']+"</div>";
					data_parse += '<div class="row"><div class="col-md-1"><input style="margin-top: 80px;width: 20px;height: 20px;" type="checkbox" name="" class="para_select" value="'+matches_result[i]['id']+'"> </div><div class="col-md-11"><div class="box">					             <div style="padding:10px 10px;" class="container">					             	 <input type="hidden" name="" class="para_id" value="'+matches_result[i]['id']+'"><h6>'+matches_result[i]['meta']['title']+'</h6><h6 style="font-weight: normal!important;font-size: 14px;">'+matches_result[i]['text']+'</h6>	<h6 style="font-weight: normal;"><span>Relevent Score : '+matches_result[i]['relevance_score']+'</span> | <span>Source : '+matches_result[i]['meta']['source']+'</span></h6></div>				           </div></div></div>';
				}

				$('#result').html('<div class="">'+data_parse+'</div>');
			}
		})
	   }
	});










  // $(document).on('click', '.para_select', function(){
  // 	const para_ids = [];
  // 	var selectid = $(this).val();
  // 	console.log(selectid);
  // 	para_ids.push(selectid);
  // 	console.log(para_ids);
  // })


var tmp = [];
  $(document).on('click', '.para_select', function(){
    if ($(this).is(':checked')) {
      var checked = ($(this).val());
      tmp.push(checked);
    } else {
      tmp.splice($.inArray(checked, tmp),1);
    }

    if(tmp.length > 0){
    	$('.bottom_div').addClass("bottom_div_show");
    }
    else{
    	$('.bottom_div').removeClass("bottom_div_show");
    }


  });




 $('.submit_prompt').click(function(){
 	$('.submit_prompt').hide();
 	$('.wait_btn').show();
 	$('.view-result').hide();
 		var prompt_1 = $('.prompt_1').val();
		var prompt_2 = $('.prompt_2').val();
		var ep1_query_id = $('.ep1_query_id').val();
		//const para_ids = ["2a4cefc6bbb0e26e65a77fc75b4f2e83", "4cf3270ee33f74e54fcc6aa67f75aac0"];
		const para_ids = tmp;

		$.ajax({
			url:'request/prompt_submit.php',
			//url:'json/test.json',
			method:'POST',
			data:{para_ids:para_ids, prompt_1:prompt_1, prompt_2:prompt_2, ep1_query_id:ep1_query_id},
			success:function(data){
				//alert(data);


				$('.search-query-div').addClass("col-md-10");
				$('.option-menu-div').show();
				$('.option-menu-div').addClass("col-md-2");












				  $('.submit_prompt').show();
					$('.wait_btn').hide();
					$('.bottom_div').removeClass("bottom_div_show");
					$('#result').hide();
					$('#result_success').show();
				  //console.log(data);
				   var result_final = JSON.parse(data);

				   $('.ep2_query_id').val(result_final['ep2_query_id']);


					//var result_final = data;
					var individual_summaries_flow_a = result_final['individual_summaries_flow_a'];
					var individual_summaries_flow_b = result_final['individual_summaries_flow_b'];

				  $('#meta_summary_flow_a').html(result_final['meta_summary_flow_a']);
					$('#meta_summary_flow_b').html(result_final['meta_summary_flow_b']);

					var in_sum_data_a = '';
					for (var i = 0; i < individual_summaries_flow_a.length ; i++) {
						 // console.log(individual_summaries_flow_a[i]);
						  in_sum_data_a += '<div  class="col-md-12"><div style="padding: 10px 10px;" class="box">'+individual_summaries_flow_a[i]+'</div></div> ';

					}
					$('#individual_summaries_flow_a').html(in_sum_data_a);



					var in_sum_data_b = '';
					for (var i = 0; i < individual_summaries_flow_b.length ; i++) {
						  //console.log(individual_summaries_flow_b[i]);
						  in_sum_data_b += '<div class="col-md-12"><div style="padding: 10px 10px;" class="box">'+individual_summaries_flow_b[i]+'</div></div> ';

					}
					$('#individual_summaries_flow_b').html(in_sum_data_b);




					var openai_request_1_flow_a = result_final['openai_request_1_flow_a']['prompt'];
					//var individual_summaries_flow_b = result_final['individual_summaries_flow_b'];

					var op_request_1_flow_a = '';
					for (var i = 0; i < openai_request_1_flow_a.length ; i++) {
						  
						  op_request_1_flow_a += '<div class="col-md-12"><div style="padding: 10px 10px;" class="box">'+openai_request_1_flow_a[i]+'</div></div> ';

					}
					$('#openai_request_1_flow_a').html(op_request_1_flow_a);



					var openai_request_1_flow_b = result_final['openai_request_1_flow_b']['prompt'];
					var op_request_1_flow_b = '';
					for (var i = 0; i < openai_request_1_flow_b.length ; i++) {
						  
						  op_request_1_flow_b += '<div class="col-md-12"><div style="padding: 10px 10px;" class="box">'+openai_request_1_flow_b[i]+'</div></div> ';

					}
					$('#openai_request_1_flow_b').html(op_request_1_flow_b);



					var openai_request_2_flow_a_b = result_final['openai_request_2_flow_a_b']['prompt'];
					var op_request_2_flow_a_b = '';
					for (var i = 0; i < openai_request_2_flow_a_b.length ; i++) {
						  
						  op_request_2_flow_a_b += '<div class="col-md-12"><div style="padding: 10px 10px;" class="box">'+openai_request_2_flow_a_b[i]+'</div></div> ';

					}
					$('#openai_request_2_flow_a_b').html(op_request_2_flow_a_b);







					// $('#individual_summaries_flow_a').html(result_final['individual_summaries_flow_a'][0]);
					// $('#individual_summaries_flow_b').html(result_final['individual_summaries_flow_b'][0]);        


			}
		})
 })







var value = '';

$(document).on('click', '.thum-up-btn', function(){
	 value = 1;
	$(this).addClass("thump_up");
	$('.thum-down-btn').removeClass("thump_down");

})

$(document).on('click', '.thum-down-btn', function(){
	 value = 0;
	$(this).addClass("thump_down");
	$('.thum-up-btn').removeClass("thump_up");
})


$(document).on('click', '.log_comments_submit', function(){
	//alert(value);
	var ep1_query_id = $('.ep1_query_id').val();
	var ep2_query_id = $('.ep2_query_id').val();
	var comment = $('.log_comments').val();

	// if (value == '') {

	// }
	// else{

    $('.log_comments_submit_Wait').show();
     $('.log_comments_submit').hide();

		$.ajax({
			url:'request/insert_feedback.php',
			method:'POST',
			data:{ep1_query_id:ep1_query_id, ep2_query_id:ep2_query_id, comment:comment, score:value},
			success:function(data){
				//console.log(data);
				$('.log_comments_submit_Wait').hide();
        $('.log_comments_submit').show();
				alert("Log Comment submited");
				$('.log_comments').val("");

			}
		})
	//}
})


$('.change_prompt').click(function(){
	$('.bottom_div').addClass("bottom_div_show");
});

$('.close_btn').click(function(){
	$('.bottom_div').removeClass("bottom_div_show");
})




	$('.submit_form').click(function(){
		//location.href="prompt.php";
		//alert(tmp);
		if(tmp.length > 0){
    	$('.bottom_div').addClass("bottom_div_show");
    }
    // else{
    // 	$('.bottom_div').removeClass("bottom_div_show");
    // }

		//$('.bottom_div').addClass("bottom_div_show");
	});


	$('.change_search_and_prompt').click(function(){
			//$('.search-query-div').show();
				$('#result_success').hide();
				$('#result').show();
				$('.search-query-div').removeClass("col-md-10");
				$('.option-menu-div').hide();
				$('.option-menu-div').removeClass("col-md-2");
				$('.bottom_div').addClass("bottom_div_show");
				$('.view-result').show();

	})


	$('.view-result').click(function(){
			$('.search-query-div').addClass("col-md-10");
				$('.option-menu-div').show();
				$('.option-menu-div').addClass("col-md-2");

				  $('.submit_prompt').show();
					$('.wait_btn').hide();
					$('.bottom_div').removeClass("bottom_div_show");
					$('#result').hide();
					$('#result_success').show();
					$('.view-result').hide();
	})

</script>