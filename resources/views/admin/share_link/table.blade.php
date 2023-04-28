<div class="table-responsive">
    <table class="table " id="users-table" width="100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Shop</th>
            <th>Link</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($shareLinks as $shareLink)
            <tr>
                {{-- {{dd($shareLink->user->name ?? 'hy')}} --}}
                <td>{{ $shareLink->user->name ?? '' }}</td>
                <td>{{ $shareLink->user->shop_name ?? '' }}</td>
                <td>{{ $shareLink->rand_link ?? '' }}</td>
                <td><a href="#">{{ !empty($shareLink->customer->name) ? $shareLink->customer->name : '' }}</a></td>
                <td>{{ ($shareLink->status == 1) ? 'Confirm' : '' }}</td>
                <td width="120">

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
