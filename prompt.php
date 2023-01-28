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
	body{
		background: #fbfbfb;
	}
	.box{
		width: 100%;
		height: auto;
        border: 1px solid #D0D3D4;
        border-radius: 10px;
        margin-bottom: 10px;

	}
	.loading_div{
		display: none;
	}

	
</style>
<body>

  


<div style="width: 100%;height: auto;background: #fbfbfb;margin-top: 1%;"> 
<br><br>

  <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="card" style="padding: 20px 20px;">

					<center><div class="loading_div">
						<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
						<center>Please Wait..</center>
					</div></center>				
    				<div class="container" id="result">
    					<div class="row">
    						<div class="col-md-6">
    							<textarea style="width:100%;height:80px;" class="form-control"></textarea>
    						</div>
    						<div class="col-md-6">
    							<textarea style="width:100%;height:80px;" class="form-control"></textarea>
    						</div>
    					</div><br><br>
    					<div class="row">
    						<center><button class="btn btn-outline-primary">Submit</button></center>
    					</div>
    				</div> 


    			</div>
    		</div>
    	</div>
    </div> 
  </div>
</div>
















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
			url:'request/search.php',
			method:'POST',
			//dataType: 'json',
			data:{query:query, optional_comment:optional_comment},
			success:function(data){
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
				

				for (var i = 1; i < matches_result_count; i++) {					
					//console.log(matches_result[0]['id']);
					//data_parse += "<div class='box'>"+matches_result[i]['id']+"</div>";
					data_parse += '<div class="row"><div class="col-md-1"><input style="margin-top: 150px;width: 20px;height: 20px;" type="checkbox" name=""> </div><div class="col-md-11"><div class="box">					             <div style="padding:10px 10px;" class="container">					             	 <input type="hidden" name="" class="para_id" value="'+matches_result[i]['id']+'"><h6>'+matches_result[i]['meta']['title']+'</h6><h6 style="font-weight: normal!important;font-size: 14px;">'+matches_result[i]['text']+'</h6>	<h6 style="font-weight: normal;"><span>Relevent Score : '+matches_result[i]['relevance_score']+'</span> | <span>Source : '+matches_result[i]['meta']['source']+'</span></h6></div>				           </div></div></div>';
				}

				$('#result').html('<div class="">'+data_parse+'</div>');
			}
		})
	   }
	});


	$('.submit_form').click(function(){

	})



</script>