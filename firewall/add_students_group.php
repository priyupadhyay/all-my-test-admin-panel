<?php
 include '../parts/header_one.php';
 ?>

<title>
 Material Dashboard by Creative Tim
</title>

<?Php
 include '../parts/header_two.php';
 include '../parts/nav.php';
 include '../parts/navtop.php';
?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
<div class="card">
	<h5 class="info-text"> Select Students to add to group </h5>
	<div class="row justify-content-center">
	  <div class="col-lg-10">
		<!-- <div class="row"> -->

	<div class="material-datatables">
	  <table id="datatables1" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
		  <thead>
			<tr>
				<th>user_id</th>
				<th>name</th>
				<th>username</th>
				<th>email</th>
				<th>type</th>
				<th>status</th>                        
				<th>actions</th>
			</tr>
		  </thead>
		  <tfoot>
			<tr>
				<th>user_id</th>
				<th>name</th>
				<th>username</th>
				<th>email</th>
				<th>type</th>
				<th>status</th>                        
				<th>actions</th>
			</tr>
		  </tfoot>
		  <tbody>
			
		   </tbody>
		</table>
	</div>



		<!-- </div> -->
	  </div>
	</div>
  </div>
  </div>
	  </div>
	</div>
  </div>

<?php
 include '../parts/footer_one.php';
  $id = $_GET['id']; 
 ?>

 </body>

 <?php
 include '../parts/footer_two.php';
 ?>
 
 <script>
  $(function(){
	  var val = <?php echo $id ?>;
          getData("users", function(data){
          console.log(data); 
         var allData = data.response;
        var questionData = [{}];
        
        $.each(allData, function(key,value) {
            if(value.type == 'Student'){
				var x = {                          
				   "user_id": value.user_id,
				   "name": value.name,
				   "uname": value.uname,
				   "email": value.email,
				   "type": value.type,
				   "status": value.status,                            
				   "action":"<input type='checkbox' name='stuid' id='stuid' value='"+value.user_id+"'/>"                    
				};
			    questionData.push(x);
			}
        });
            questionData.splice(0, 1);
		var table1 = $('#datatables1').DataTable({
            Language: {
            Processing: ""
            },
            processing : true,
            data: questionData,
            columns: [
                {"data": "user_id"},
                {"data": "name"},
                {"data": "uname"},
                {"data": "email"},
                {"data": "type"},                
                {"data": "status"},           
                {"data": "action"},
			]
            });



          });          
        });
 </script>