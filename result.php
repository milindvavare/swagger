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
        padding: 10px 10px;

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
		transition: .5s;
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
    					<!-- <div class="col-md-12" id="result">    						
						       <div class="box">
					       
				           </div>   		         
    					</div> -->
    					<div class="row">
    						<div class="col-md-6">
    							<div class="box">
					           <h6 id="meta_summary_flow_a"></h6>
				           </div>
    						</div>
    						<div class="col-md-6">
    							<div class="box">
					          <h6 id="meta_summary_flow_b"></h6>
				           </div>
    						</div>
    						<div class="col-md-6">
    							<div class="box">
					       
				           </div>
    						</div>
    						<div class="col-md-6">
    							<div class="box">
					       
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
			$('#meta_summary_flow_a').html(data['meta_summary_flow_a']);
			$('#meta_summary_flow_b').html(data['meta_summary_flow_b']);
			$('#individual_summaries_flow_a').html(data['individual_summaries_flow_a']);
			$('#individual_summaries_flow_b').html(data['individual_summaries_flow_b']);

		}
	})
}









</script>
