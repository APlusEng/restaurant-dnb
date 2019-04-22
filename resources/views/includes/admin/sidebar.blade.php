<div class="col-md-3">
    <div class="card">
        <div class="card-header">{{ __('Options') }}</div>
        <div class="card-body">
            <ul>
                <li><a href="{{ route('admin.setting') }}">Settings</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('admin.notice.index') }}">Notices</a></li>
                <li><a href="{{ route('admin.notice.create') }}">Add New notice</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('admin.video.index') }}">Videos</a></li>
                <li><a href="{{ route('admin.video.create') }}">Add New Video</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('admin.news.index') }}">News</a></li>
                <li><a href="{{ route('admin.news.create') }}">Add New News</a></li>
            </ul>
            <ul>
                <li><a href="{{ route('admin.advertisement.index') }}">Advertisement</a></li>
                <li><a href="{{ route('admin.advertisement.create') }}">Add New Advertisement</a></li>
            </ul>
        </div>
    </div>
</div>