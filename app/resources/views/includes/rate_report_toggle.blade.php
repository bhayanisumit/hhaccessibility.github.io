			<div class="rate-report-toggle">
				<div class="rate-report">
					<a class="{{ !$is_reporting ? 'selected' : '' }}" href="/location-rating/{{ $location_id }}/{{ $question_category_id }}">Rate</a>
					<a class="{{ $is_reporting ? 'selected' : '' }}" href="/location-reporting/{{ $location_id }}/{{ $question_category_id }}">View</a>
				</div>
				<div class="collapse-toggle-button">
					<span class="fa fa-bars"></span>
				</div>
				<div class="collapsible-menu">
					<ul>
						@foreach ($question_categories as $category)
						<li>
							<a href="{{ $base_url }}{{ $location_id }}/{{ $category->id }}"
							@if ( $category->id === $question_category->id )
								class="selected"
							@endif
							>
								{{ $category->name }}
							</a>
						</li>
						@endforeach
						@if ( !$is_reporting )
						<li class="text-center">
							<div class="submit">
								@include('pages.location_rating.submit',
									array(
										'location_id' => $location_id
									))
							</div>
						</li>
						@endif
					</ul>
				</div>
			</div>
