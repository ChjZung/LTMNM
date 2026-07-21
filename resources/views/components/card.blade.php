@props(['title' => 'Thông tin'])

<div style="background: #ffffff; border: 1px solid #cbd5e1; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.05); margin-top: 16px; overflow: hidden;">
    <div style="background: #f8fafc; padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-weight: 600; color: #1e293b; font-size: 16px;">
        {{ $title }}
    </div>
    <div style="padding: 16px; color: #334155; line-height: 1.5;">
        {{ $slot }}
    </div>
</div>
