@extends('dashboard')

@section('content')

<style>
/* Wrapper */
.inbox-wrapper {
    display: flex;
    height: calc(100vh - 80px);
}

/* LEFT LIST */
.inbox-list {
    width: 35%;
    background: #ffffff;
    border-right: 1px solid #ddd;
    padding: 20px;
    overflow-y: auto;
}

.inbox-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    border-radius: 10px;
    cursor: pointer;
}

.inbox-item:hover {
    background: #eef5f4;
}

.inbox-item img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.inbox-item .name {
    font-weight: 600;
}

.inbox-item .msg-preview {
    font-size: 14px;
    color: #555;
}

/* RIGHT CHAT BOX */
.chat-box {
    width: 65%;
    background: #b9cfcd;
    padding: 30px;
    position: relative;
    overflow-y: auto;
}

.chat-wrap {
    margin-top: 20px;
}

.chat-msg {
    display: flex;
    align-items: flex-start;
    gap: 10px;
}

.chat-msg img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.bubble {
    background: #ffffff;
    padding: 12px 18px;
    border-radius: 12px;
    font-size: 15px;
}

.msg-time {
    margin-left: 55px;
    font-size: 12px;
    margin-top: 4px;
    color: #444;
}

.chat-date {
    text-align: center;
    margin-top: 10px;
    font-size: 13px;
    color: #333;
}
</style>

<!-- ===== Page Content Start ===== -->
<div class="inbox-wrapper">

    <!-- LEFT LIST / MESSAGE LIST -->
    <div class="inbox-list">
        <h3 style="font-weight:600; margin-bottom:20px;">Inbox</h3>

        <div class="inbox-item">
            <img src="https://i.pravatar.cc/150?img=12">
            <div>
                <div class="name">Junius Tipagau</div>
                <div class="msg-preview">Hey Flippy! Write me a script...</div>
            </div>
        </div>

        <div class="inbox-item">
            <img src="https://i.pravatar.cc/150?img=23">
            <div>
                <div class="name">Stevio Kogoya</div>
                <div class="msg-preview">Are you free today?</div>
            </div>
        </div>

        <div class="inbox-item">
            <img src="https://i.pravatar.cc/150?img=34">
            <div>
                <div class="name">Bagas</div>
                <div class="msg-preview">Let's meet tomorrow.</div>
            </div>
        </div>

    </div>

    <!-- RIGHT CHAT BOX -->
    <div class="chat-box">
        <div class="chat-date">Today</div>

        <div class="chat-wrap">
            <div class="chat-msg">
                <img src="https://i.pravatar.cc/150?img=12">
                <div class="bubble">
                    Hey Flippy! Write me a script for building an Analog Clock.
                </div>
            </div>
            <div class="msg-time">11.05</div>
        </div>

    </div>
</div>

@endsection