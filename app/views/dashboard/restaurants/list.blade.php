@if($action == 'list')
	@if($menu_category->count() > 0)
	    @foreach ($menu_category as $mc)
			<tr>
				<td>{{ $mc->getKey() }}</td>
				<td>{{ $mc->getName() }}</td>
				<td>
					<button onclick="menuCategoryEdit({{ $mc->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
					@if($mc->getState() == 1)
	                    <button onclick="menuCategoryChangeState({{ $mc->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
	                @else
	                    <button onclick="menuCategoryChangeState({{ $mc->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
	                @endif
	                <button onclick="menuCategoryDestroy({{ $mc->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
				</td>
			</tr>
		@endforeach
	@else
	    <tr><td colspan="7">No existen registros</td></tr>
	@endif
@elseif($action == 'combo')
	@if($menu_category->count() > 0)
	    @foreach ($menu_category as $mc)
	    	<option value="{{ $mc->getKey() }}">{{ $mc->getName() }}</option>
	    @endforeach
	@else
	    <option value="0">No existen registros</option>
	@endif
@endif