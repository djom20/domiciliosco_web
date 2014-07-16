@foreach ($additional as $add)
	<tr>
		<td>{{ $add->getName() }}</td>
		<td>{{ $add->getDescription() }}</td>
		<td>{{ $add->getPrice() }}</td>
		<td>{{ $add->getRestaurant() }}</td>
		<td>{{ $add->getMenu() }}</td>
		<td>
			<button class="btn btn-danger"><span class="glyphicon glyphicon-pencil"></span></button>
			<button onclick="deleteAdditional({{ $add->getKey() }});" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
		</td>
	</tr>
@endforeach