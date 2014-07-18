 @if($additional->count() > 0)
    @foreach ($additional as $add)
	    <tr>
	        <td>{{ $add->getName() }}</td>
	        <td>{{ $add->getDescription() }}</td>
	        <td>{{ $add->getPrice() }}</td>
	        <td>{{ Restaurant::find($add->getRestaurant())->name }}</td>
	        <td>{{ Menu::find($add->getMenu())->name }}</td>
	        <td>
	            <button onclick="additionalEdit({{ $add->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
	            @if($add->getState() == 1)
	                <button onclick="additionalChangeState({{ $add->getKey() }}, 0);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button>
	            @else
	                <button onclick="additionalChangeState({{ $add->getKey() }}, 1);" class="btn btn-danger"><span class="glyphicon glyphicon-eye-close"></span></button>
	            @endif
	            <button onclick="additionalDestroy({{ $add->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
			</td>
		</tr>
    @endforeach
@else
    <tr><td colspan="7">No existen registros</td></tr>
@endif