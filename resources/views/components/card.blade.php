@props(['title'])

<div style="
    background:#fff;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.12);
    margin-bottom:20px;
    overflow:hidden;
">

    <div style="
        background:linear-gradient(135deg,#2563EB,#06B6D4);
        color:white;
        padding:15px 20px;
    ">
        <h3 style="margin:0;">{{ $title }}</h3>
    </div>

    <div style="padding:20px;">
        {{ $slot }}
    </div>

</div>