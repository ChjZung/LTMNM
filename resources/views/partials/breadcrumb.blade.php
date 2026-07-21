@php
    $currentRoute = Route::currentRouteName();
@endphp

<div style="font-size: 14px; color: #475569; margin-bottom: 16px; padding: 10px 14px; background: #f1f5f9; border-radius: 6px; border: 1px solid #e2e8f0;">
    <a href="{{ url('/') }}" style="color: #2563eb; text-decoration: none; font-weight: 500;">Trang chủ</a>
    
    @if(str_contains($currentRoute, 'index'))
        &nbsp;/&nbsp; <span style="font-weight: 600;">Danh sách bài viết</span>
    @elseif(str_contains($currentRoute, 'create'))
        &nbsp;/&nbsp; <a href="{{ route('bt9.articles.index') }}" style="color: #2563eb; text-decoration: none; font-weight: 500;">Danh sách bài viết</a>
        &nbsp;/&nbsp; <span style="font-weight: 600;">Tạo bài viết mới</span>
    @elseif(str_contains($currentRoute, 'show'))
        &nbsp;/&nbsp; <a href="{{ route('bt9.articles.index') }}" style="color: #2563eb; text-decoration: none; font-weight: 500;">Danh sách bài viết</a>
        &nbsp;/&nbsp; <span style="font-weight: 600;">Chi tiết bài viết</span>
    @else
        &nbsp;/&nbsp; <span>Tuyến đường: {{ $currentRoute }}</span>
    @endif
    
    <span style="float: right; color: #94a3b8; font-size: 12px;">Route Name: <code>{{ $currentRoute }}</code></span>
</div>
