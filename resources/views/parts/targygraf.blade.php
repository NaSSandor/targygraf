<div class="content" data-specialis="0">
	@foreach ($program->courseBlocks->where('row', 0) as $courseBlock)
		@include('parts.course-block')
	@endforeach
</div>

@if (($specialBlocks = $program->courseBlocks->where('row', 1)) && !$specialBlocks->isEmpty())
	<div class="content" data-specialis="1">
		@foreach ($program->courseBlocks->where('row', 1) as $courseBlock)
			@include('parts.course-block')
		@endforeach
	</div>
@endif
