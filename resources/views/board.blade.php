@extends('layouts.master')

@section('title','排行榜')

@section('content')
	<div class="page-header">
		<h1>排名</h1>
	</div>
	<div class="row">
		<table class="table table-hover">
			<thead>
			<tr>
				<th>名次</th>
				<th>學號</th>
				<th>姓名</th>
				<th>國文</th>
				<th>英文</th>
				<th>數學</th>
				<th>總分</th>
				<th>動作</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				@foreach ($scores as $index => $score)
										<tr>
										<td class="table-text">
												<div>{{$index=$index+1}}</div>
											</td>
										<td class="table-text">
												<div>{{ $score->student->no }}</div>
											</td>
										<td class="table-text">
												<div>{{ $score->student->user->name }}</div>
											</td>
										<td class="table-text">
												<div>{{ $score->chinese }}</div>
											</td>
										<td class="table-text">
											<div>{{ $score->english }}</div>
											</td>
										<td class="table-text">
												<div>{{ $score->math }}</div>
											</td>
										<td class="table-text">
												<div>{{ $score->total }}</div>
											</td>
										<td>
												<a class="btn btn-default btn-sm" href="{{route('student',['student_no'=>'s1234567890'])}}">查看學生資料</a>
											</td>
										<td>
										</tr>
							@endforeach
			</tbody>
		</table>
	</div>
@stop