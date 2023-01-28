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
</head>
<style type="text/css">
	body{
		background: #fbfbfb;
	}
	.box{
		width: 100%;
		height: 200px;
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
</style>
<body>

  


<div style="width: 100%;height: auto;background: #fbfbfb;margin-top: 1%;"> 
<br><br>

    
<!-- <div style="margin-top: 5%;width: 100%;height: 100px;background: red;">
	<h4 id="selectedList"></h4>
</div> -->

 


	
      <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="card" style="padding: 20px 20px;">

					<center><div class="loading_div">
						<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
						<center>Please Wait..</center>
					</div></center>


				
    				<div class="container">
    					<div class="col-md-12" id="result">    						
						  <!-- <div class="box">
					       
				           </div>     -->				         
    					</div>
    				</div> 


    			</div>
    		</div>
    	</div>
    </div> 
</div>
</div>



<div  class="bottom_div">
	<center>
		
  <div class="container">	
	<div class="row">
		<div class="col-md-4">
			<textarea class="prompt_textarea prompt_1"></textarea>
		</div>
		<div class="col-md-4">
			<textarea class="prompt_textarea prompt_2"></textarea>
		</div>
		<div class="col-md-4">
			<button style="margin-top: 20%;" class="btn btn-success submit_prompt">Submit</button>
		</div>
	</div>
 </div>
</center>
</div>








<nav style="position: fixed;width: 100%;top: 0;" class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
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
          <input  class="form-control query" type="text" name="" placeholder="Enter Query">
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
    </div>
  </div>
  <!-- Container wrapper -->
</nav>




<input type="hidden" name="" class="runtime">
<input type="hidden" name="" class="ep1_query_id">


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
		$('.loading_div').show();
		$.ajax({
			url:'json/test_2.json',
			method:'POST',
			//dataType: 'json',
			data:{query:query, optional_comment:optional_comment},
			success:function(data){
				var data_parse = '';
				$('.loading_div').hide();
				console.log(data['matches'][0]['meta']['title']);
				for (var i = 1; i < data['matches'].length; i++) {    			
					//console.log(data['matches'][i]['id']);
					data_parse += '<div><input type="checkbox" class="parameter_check" value="'+data['matches'][i]['id']+'"></div>';
					data_parse += "<div class='box'>"+data['matches'][i]['id']+"</div>";
					data_parse +="<h4>"+data['matches'][i]['meta']['source']+"</h4>";
				}

				$('#result').html('<div class="">'+data_parse+'</div>');



				// var res = JSON.parse(data);
				// var runtime = res['runtime'];
				// var ep1_query_id = res['ep1_query_id'];
				// $('.runtime_display').html(parseFloat(runtime).toFixed(2));
				// $('.runtime').val(runtime);
				// $('.ep1_query_id').val(ep1_query_id);				
				// $('.loading_div').hide();
				// //$('#result').html(res['matches']);				

				// var matches_result = res['matches'];
				// var matches_result_count = matches_result.length;
				// var data_parse = '';
				// for (var i = 1; i < matches_result_count; i++) {
				// 	//console.log(data['matches'][i]['id']);
				// 	data_parse += "<div class='box'></div>";
				// }

				// $('#result').html('<div class="">'+data_parse+'</div>');
			}
		})
	   }
	});






// $(document).on('click', '.parameter_check', function(){
// 	var paraList = [];
// 	var selected = this.checked;
// 	if (this.checked == true) {

// 		for (var i = 0; i < selected.length; i++) {
// 		  //paraList.push(checkboxes[i].value)
// 			console.log("okk");
// 		}


// 	    // console.log(this.value);
// 	    // paraList.push(this.value);
// 	    // document.getElementById("selectedList").innerHTML = paraList.join(' , ');
// 	}
// })


// var paraList = [];
// $("input:checkbox[name=type]:checked").each(function(){
//     paraList.push($(this).val());
// });


$(document).on('click', '.parameter_check', function(){
	// var selected_value = 0;
	// var i = 0;
	// var selected = this.checked;
	// if (selected == true) {
	// 	selected_value++;
	// }
	// else{
	// 	selected_value--;
	// }
	// console.log(selected_value);

	$('.bottom_div').addClass("bottom_div_show");
})









$('.submit_prompt').click(function(){
	var prompt_1 = $('.prompt_1').val();
	var prompt_2 = $('.prompt_2').val();
	var ep1_query_id = $('.ep1_query_id').val();
	const para_ids = ["2a4cefc6bbb0e26e65a77fc75b4f2e83", "4cf3270ee33f74e54fcc6aa67f75aac0"];

	$.ajax({
		url:'request/prompt_submit.php',
		method:'POST',
		data:{para_ids:para_ids, prompt_1:prompt_1, prompt_2:prompt_2, ep1_query_id:ep1_query_id},
		success:function(data){
			//alert(data);
			//console.log(data);
		}
	})

})



fetchResult();
function fetchResult(){
	$.ajax({
		url:'request/test.json',
		method:'POST',
		success:function(data){			
			//$('#result').html(data);
			// console.log(data['meta_summary_flow_a']);
			// console.log(data['meta_summary_flow_b']);
			// console.log(data['individual_summaries_flow_a'][0]);
			// console.log(data['individual_summaries_flow_b'][0]);
		}
	})
}









</script>
