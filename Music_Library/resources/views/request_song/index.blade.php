@extends('backendtemplate')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            
         	

          <h2 class="d-inline-block">Singer List</h2>
          <a href="{{route('singer.create')}}" class="btn btn-info float-right">Add New</a>
          <table class="table mt-3 table-bordered dataTable">
          		<thead>
          			<tr>
          				<td>No</td>
          				<td>Request Message</td>
          				<td>Request Date</td>
          				<td>User</td>
          				
          			</tr>
          		</thead>
          		<tbody>

                @php $i=1; @endphp
                @foreach($request_songs as $row)

          			<tr>
          				<td>{{$i++}}</td>
          				<td>{{$row->request_msg}}</td>
                  <td>{{$row->request_date}}</td> 	
                  <td>{{$row->user->name}}</td>
                </tr>

                @endforeach

          		</tbody>
          		
          	</table>



          </div>
        </div>
      </div>
    </main>

@endsection