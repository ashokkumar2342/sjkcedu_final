@extends('include.main')
@section('include.main.container')
<!-- Header Close -->
<div class="banner">
	@include('include.banner')
</div>
<section class="page-heading">
	<div class="container">
		<h2>Appointment Letter (Dr. Seema Taneja, Lecturer in Education)</h2>
	</div>
</section>
	<div class="container" style="overflow-x: auto;">
		  		<table border="2" width="100%">



		  			<tbody>
		  			<tr>
		            	<td valign="top" width="50%"><img border="1" src="{{ asset('images/img/appointment_3_1.jpg') }}" width="422"></td>
		            	<td valign="top" width="50%"><img border="1" src="{{ asset('images/img/appointment_3_2.jpg') }}" width="422"></td>
		            </tr>



		  		</tbody></table>
                
  	</div>
@endsection

		