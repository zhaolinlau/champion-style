@extends('layouts.app')

@section('content')
	<div class="container min-vh-100">
		<div class="row mt-5">
			<div class="col-12">
				<h1>Contact List</h1>
			</div>

			<div class="col-12">
				<table class="table">
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Message</th>
						<th>Actions</th>
					</tr>

					@foreach ($contacts as $contact)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $contact->name }}</td>
							<td>{{ $contact->phone }}</td>
							<td>{{ $contact->email }}</td>
							<td>
								<textarea class="form-control" readonly>{{ $contact->message }}</textarea>
							</td>
							<td>
								<div class="d-inline-flex">
									<a class="btn btn-info mx-1" href="{{ route('contacts.show', $contact) }}">
										<i class="bi bi-pencil"></i>
									</a>

									<form action="{{ route('contacts.destroy', $contact) }}" method="post">
										@csrf
										@method('delete')
										<button class="btn btn-danger mx-1" type="submit" onclick="return confirm('Confirm delete?')">
											<i class="bi bi-trash"></i>
										</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</table>
			</div>

			<div class="col-12">
				{{ $contacts->links() }}
			</div>
		</div>
	</div>
@endsection
