<!DOCTYPE html>
<html>
<head>

<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!--Date Picker CSS-->	
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">
	<!--/. Date Picker CSS-->	
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">	



  <link rel="stylesheet" type="text/css" href="assets/css/zelect.css">

  <script src="assets/js/jquery-1-11-3.js"></script>
  	
  	<script src="assets/js/jquery-1.10.2.min.js"></script>
  	<script src="assets/js/bootstrap.select.js"></script>
	<!--Date Picker-->
	<script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/locales/bootstrap-datepicker.es.min.js"></script>
	<!--/. Date Picker JS-->

	<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
  	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/script.js"></script>
	<!-- Bootstrap Select -->
	<script src="assets/js/bootstrap-select.js"></script>
	<script src="assets/js/zelect.js"></script>
  
  <script>
    $(document).ready(function() {
      $('#intro select').zelect({ placeholder:'Plz select...' });
    	
    });
  </script>
</head>
<body>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
  <section id="intro">
    <h2>$('select').zelect()</h2>
    <select>
      <option>I really have</option>
      <option>to think of some</option>
      <option>significantly more</option>
      <option>relevant example data</option>
      <option>here.</option>
      <option>Also, need more and longer items</option>
      <option>to demo scroll</option>
    </select>
  </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>