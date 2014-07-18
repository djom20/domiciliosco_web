@if($banners->count() > 0)
	@foreach ($banners as $banner)
		<tr>
			<td>{{ $banner->getKey() }}</td>
			<td>{{ HTML::image('uploads/banners/'.$banner->getImage(), 'Banner '.$banner->getKey(), array('style' => 'width:14em;')) }}</td>
			<td><a href="{{ $banner->getLink() }}">{{ $banner->getLink() }}</a></td>
			<td>{{ $banner->getDescription() }}</td>
			<td>
				<button onclick="bannerEdit({{ $banner->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
				@if($banner->getState() == 1)
                    <button onclick="bannerChangeState({{ $banner->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
                @else
                    <button onclick="bannerChangeState({{ $banner->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
                @endif
				<button onclick="bannerDelete({{ $banner->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
			</td>
		</tr>
	@endforeach
@else
    <tr><td colspan="7">No existen registros</td></tr>
@endif