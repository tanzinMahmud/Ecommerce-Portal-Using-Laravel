@extends('Layouts.Admin.header')
@section('content')

<center><table border="1px" style="font-size:20px; padding:10px;">
			<tr > 
				<td style="font-size:20px; padding:10px;">No</td>
				<td style="font-size:20px; padding:10px;">Product Name</td>
				<td style="font-size:20px; padding:10px;">Product Price</td>
				<td style="font-size:20px; padding:10px;">Quanity</td>
			</tr>
			@foreach($i as $key=>$val)
			<tr>
				<td style="font-size:20px; padding:10px;">{{$key+1}}</td>
				<td style="font-size:20px; padding:10px;">{{$val[0]->title}}</td>
				<td style="font-size:20px; padding:10px;">{{$val[0]->price}}</td>
				<td style="font-size:20px; padding:10px;">1</td>
			</tr>
			@endforeach
				
			
		</table>
		<p>{{session()->get('deliverMessage')}}</p>
</center>

@endsection