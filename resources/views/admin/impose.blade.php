@extends('backpack::layout')

@section('header')
<section class="content-header">
	<h1>Impose</h1>
	<ol class="breadcrumb">
		<li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
		<li class="active">{{ trans('backpack::base.dashboard') }}</li>
	</ol>
</section>
@endsection


@section('content')
<div class="row">
	<div class="col-md-2">
		<div class="box box-default">
			<div class="box-header with-border">
				<div class="box-title">Page View</div>
			</div>

			<div class="box-body">{{ trans('backpack::base.logged_in') }}</div>
		</div>
	</div>

	<div class="col-md-7">
		<div class="box box-default">
			<div class="box-header with-border">
				<div class="box-title">Sheet View</div>
			</div>

			<div class="box-body"><img src="{{$layoutImg}}"></div>
		</div>
	</div>

	<div class="col-md-3">
		<div class="box box-default">
			<div class="box-header with-border">
				<div class="box-title">Settings</div>
			</div>
			<div class="box-body">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="imposeType" class="control-label col-sm-3">Type:</label>
						<div class="col-sm-9">
							<select class="form-control" id="imposeType">
								<option value="normal">Normal</option>
								<option value="booklet">Booklet</option>
								<option value="gangup">Gangup</option>
							</select>
						</div>
					</div>
					<hr>
					{{-- Layout --}}
					<div class="form-group">
						<label for="finishSize" class="control-label col-sm-3">Finish Size:</label>
						<div class="col-sm-9">
							<select class="form-control" id="finishSize">
								<option value="basedOnCrop">Based on Crop</option>
								<option value="standardSize">Standard Size</option>
								<option value="userDefined">User Defined</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="sheet" class="control-label col-sm-3">Sheet:</label>
						<div class="col-sm-9">
							<select class="form-control" id="sheet">
								<option value="sra3">SRA3</option>
								<option value="a3">A3</option>
								<option value="a4">A4</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label for="duplex" class="control-label col-sm-3">Duplex:</label>
						<div class="col-sm-9">
							<select class="form-control" id="duplex">
								<option value="off">Off</option>
								<option value="toptop">Top-Top</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="copies">Copies:</label>
						<div class="col-sm-9">	
							<input type="number" class="form-control" id="copies" placeholder="Number of copies" step="1">
						</div>	
					</div>
					<hr>
					<div class="form-group">
						<label for="duplex" class="control-label col-sm-3">Oreintation:</label>
						<div class="col-sm-7">
							<select class="form-control" id="duplex">
								<option value="portrait">Portrait</option>
								<option value="landscape">Landscape</option>
							</select>
						</div>
						<div class="col-sm-2">
							<a href="#" class="btn btn-primary btn-sm" role="button">Auto</a>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3" for="bleed">Bleed:</label>
						<div class="col-sm-9">	
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-resize-horizontal"></i></span>
								<input id="bleedH" min="0" type="number" class="form-control" name="bleedH">
							</div>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-resize-vertical"></i></span>
								<input id="bleedV" min="0" type="number" class="form-control" name="bleedV">
							</div>
							<div class="input-group">
								<input type="checkbox" value="bleedApplyBoth"> Apply Both</label>
							</div>
						</div>	
					</div>
					<hr>
					{{-- Scale --}}
					<div class="form-group">
						<label for="scaling" class="control-label col-sm-3">Scaling:</label>
						<div class="col-sm-7">
							<select class="form-control" id="scaling">
								<option value="doNotScale">Do Not Scale</option>
								<option value="scaleToFit">Scale to Fit</option>
								<option value="custom">Custom</option>
							</select>
						</div>
					</div>
					<div class="form-group has-feedback has-feedback-right">
						<label class="control-label col-sm-3" for="scaleFactor">Scale Factor:</label>
						<div class="col-sm-9">	
							<input type="number" class="form-control" id="scaleFactor">
							<i class="fa fa-percent form-control-feedback"></i>
							<input type="checkbox" value="useNonPrintableArea"> Use Non-Printable area</label>
						</div>	
					</div>
					<div class="form-group">
						<label for="marks" class="control-label col-sm-3">Marks:</label>
						<div class="col-sm-9">
							<select class="form-control" id="marks">
								<option value="sra3">None</option>
								<option value="a3">Stadard Preset...</option>
								<option>-</option>
								<option value="a3">Define</option>
							</select>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
