<div class="table-responsive">
    <table class="table " id="users-table" width="100%">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Shop</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Company</th>
            <th>Status</th>
            <th>Tax</th>
            <th>Address</th>
            <th>City</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $i=0; ?>
        @foreach($users as $user)
            <tr>
                <?php $i++ ?>
                <td>{{ $i }}</td>
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
