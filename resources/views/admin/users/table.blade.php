<div class="table-responsive">
    <table class="table" id="users-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Shop Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Status</th>
            <th>Company Name</th>
            <th>Tax Number</th>
            <th>Address</th>
            <th>City Name</th>
            <th>Bank IBAN</th>

            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->shop_name }}</td>
                <td>{{ $user->phone_number }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="{{ asset('public/logo') .'/'. $user->logo}}"width="50" height="50"></td>
                <td>{{ $user->company_name }}</td>
                <td id='status_{{ $user->id }}'>
                    @if($user->status == 'active')
                        <button class="btn btn-success" onclick="changeStatus('{{ $user->status }}', '{{ $user->id }}')">{{ $user->status }}</button>
                    @elseif($user->status == 'deactive')
                        <button class="btn btn-danger" onclick="changeStatus('{{ $user->status }}', '{{ $user->id }}')">{{ $user->status }}</button>
                    @else
                        <button class="btn btn-warning" onclick="changeStatus('{{ $user->status }}', '{{ $user->id }}')">{{ $user->status }}</button>
                    @endif
                </td>
                <td>{{ $user->tax_number }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->city_name }}</td>
                <td>{{ $user->bank_iban }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('users.edit', [$user->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
