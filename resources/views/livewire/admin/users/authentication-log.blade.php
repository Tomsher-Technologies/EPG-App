<div class="card mb-0">
    <div class="table-responsive" data-toggle="lists">
        <table class="table mb-0 thead-border-top-0 table-nowrap">
            <thead>
                <tr>
                    <th class="pr-0">
                        <a href="javascript:void(0)">No:</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">Login At</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">Logout At</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">IP Address</a>
                    </th>
                    <th>
                        <a href="javascript:void(0)">Browser</a>
                    </th>
                </tr>
            </thead>
            <tbody class="list" id="contacts">
                @foreach ($logs as $log)
                    <tr>
                        <td class="pr-0">{{ $loop->iteration }}</td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ Carbon\Carbon::parse($log->login_at)->format('d/m/Y h:i:s') }}
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ $log->logout_at ? Carbon\Carbon::parse($log->logout_at)->format('d/m/Y h:i:s') : '-' }}
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ $log->ip_address }}
                            </div>
                        </td>
                        <td>
                            <div class="media align-items-center" style="white-space: nowrap">
                                {{ $log->user_agent }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer p-8pt">
        {{ $logs->links() }}
    </div>
</div>
