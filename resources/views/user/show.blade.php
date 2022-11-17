@extends('layouts.main')


@section('title')
Customer  |
@endsection
@section('content')
<div class="body-content">
	<div class="card ">
		<div class="card-body">
			<div class="row ">
				<div class="col-sm-6 col-xs-12 contact">
					<div class="card">
						<div class="box box-info">
                            <center><h3 class="widget-user-username">{{ $data->name }}</h3></center>
							</div>
							
                          <!-- Modal -->

						</div>

					</div>
                   


			</div>

		
		</div>
	</div>
</div>

<div class="body-content">
	<div class="card ">
		<div class="card-body">
			<div class="table-responsive mb-4">
                        <table class="table table-bordered">
                            <thead>
                                <th>Sl</th>
                                <th> Date</th>
                                <th>Type</th>
                                <th>Debit</th>
                                <th> Credit</th>
                                <td>Balance</td>

                            </thead>
                            <tbody>
                             @php
                             $i = 1;
                             $gtotal = 0;
                             $pgtotal = 0;
                             $sgtotal = 0;
                             $trtotal = 0;
                             @endphp

                             @if(isset($results))
                             @foreach($results as $key2 => $item)
                             @php
                             $gtotal = $gtotal;
                             @endphp


                             <tr>
                                 <td>{{$key2+1}}</td>
                                 <td>{{ Carbon\Carbon::parse($item['date'])->format('d-m-Y') }}</td>
                                 <td>{{ $item['type'] }}</td>
                                 <td><font color="blue">{{ $item['amount'] }}</font></td>
                                 <td><font color="green">{{ $item['ramount'] }}</font></td>

                                 @php

                                 if($item['type'] == 'Jorimana'){
                                    $sgtotal = $sgtotal + $item['damount'];
                                }
                                if(($item['type'] == 'Paid') ){
                                    $pgtotal = $pgtotal + $item['wamount'];

                                }

                                $gtotal = $sgtotal -$pgtotal;

                                @endphp 
                                <td>{{$gtotal}}
                                </td>
                            </tr>
                            @endforeach

                            @endif
                        </tbody>

                    </table>
                </div>
		</div>
	</div>
</div>

@endsection