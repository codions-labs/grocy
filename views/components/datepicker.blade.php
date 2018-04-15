@push('componentScripts')
	<script src="/viewjs/components/datepicker.js"></script>
@endpush

<div class="form-group">
	<label for="{{ $id }}">{!! $label !!}&nbsp;&nbsp;<span class="small text-muted"><time id="datepicker-timeago" class="timeago timeago-contextual"></time></span></label>
	<div class="input-group date">
		<input type="text" data-isodate="isodate" class="form-control datepicker" id="{{ $id }}" name="{{ $id }}" required autocomplete="off">
		<div id="datepicker-button" class="input-group-addon">
			<i class="fa fa-calendar"></i>
		</div>
	</div>
	<div class="help-block with-errors"></div>
</div>
